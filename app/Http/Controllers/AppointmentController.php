<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randevu;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display a listing of appointments
    public function index()
    {
        $randevular = Randevu::where('email', Auth::user()->email)
            ->orderBy('randevutarih', 'desc')
            ->get();
        Log::info('Randevular yüklendi', ['count' => $randevular->count()]);
        return view('appointment.index', compact('randevular'));
    }

    // Show the form for creating a new appointment
    public function create()
    {
        return view('appointment.create');
    }

    // Store a newly created appointment
    public function store(Request $request)
    {
        // Formdan gelen verileri doğrulama
        $validatedData = $request->validate([
            'adsoyad' => 'required|string|max:255',
            'telno' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'randevutarih' => 'required|date|after:now',
            'bolum' => 'required|string|max:255',
            'mesaj' => 'nullable|string|max:500',
        ], [
            'adsoyad.required' => 'Ad Soyad alanı zorunludur.',
            'telno.required' => 'Telefon numarası zorunludur.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'randevutarih.required' => 'Randevu tarihi zorunludur.',
            'randevutarih.after' => 'Randevu tarihi bugünden sonra olmalıdır.',
            'bolum.required' => 'Bölüm seçimi zorunludur.',
        ]);

        try {
            // Randevu kaydetme
            $randevu = Randevu::create([
                'adsoyad' => $validatedData['adsoyad'],
                'telno' => $validatedData['telno'],
                'email' => Auth::user()->email, // Kullanıcının e-postasını otomatik ekle
                'randevutarih' => $validatedData['randevutarih'],
                'bolum' => $validatedData['bolum'],
                'mesaj' => $validatedData['mesaj'] ?? null,
                'kayittarihi' => now(),
                'ipadresi' => request()->ip(),
                'durum' => 'Aktif'
            ]);

            Log::info('Yeni randevu oluşturuldu', ['id' => $randevu->id]);
            return redirect()->route('appointment.index')->with('success', 'Randevunuz başarıyla alındı.');
        } catch (\Exception $e) {
            Log::error('Randevu oluşturma hatası', ['error' => $e->getMessage()]);
            return back()->with('error', 'Randevu oluşturulurken bir hata oluştu. Lütfen tekrar deneyin.');
        }
    }

    // Display the specified appointment
    public function show($id)
    {
        $randevu = Randevu::where('email', Auth::user()->email)
            ->findOrFail($id);
        return view('appointment.show', compact('randevu'));
    }

    // Delete the specified appointment
    public function destroy($id)
    {
        try {
            $randevu = Randevu::where('email', Auth::user()->email)
                ->findOrFail($id);
            $randevu->delete();
            Log::info('Randevu silindi', ['id' => $id]);
            return redirect()->route('appointment.index')->with('success', 'Randevu başarıyla iptal edildi.');
        } catch (\Exception $e) {
            Log::error('Randevu silme hatası', ['id' => $id, 'error' => $e->getMessage()]);
            return back()->with('error', 'Randevu silinirken bir hata oluştu.');
        }
    }
}
