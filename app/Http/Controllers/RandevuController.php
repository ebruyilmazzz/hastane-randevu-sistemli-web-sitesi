<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randevu;  // Randevu modelini içe aktarıyoruz.

class RandevuController extends Controller
{
    // Randevu kayıt formunu gösteren metod
    public function create()
    {
        return view('admin.randevu_kayit'); // admin klasöründeki randevu_kayit.blade.php dosyasını göster
    }

    // Randevu kayıt işlemini gerçekleştiren metod
    public function store(Request $request)
    {
        // Formdan gelen verileri doğrula
        $validatedData = $request->validate([
            'adsoyad' => 'required|string|max:255',
            'email' => 'required|email',
            'telefon' => 'required|string|max:15',
            'bolum' => 'required|string',
            'randevu_tarihi' => 'required|date',
            'mesaj' => 'nullable|string',
        ]);

        // Ekstra verileri ekleyerek veritabanına kaydet
        $randevu = Randevu::create([
            'adsoyad' => $validatedData['adsoyad'],
            'email' => $validatedData['email'],
            'telno' => $validatedData['telefon'],
            'bolum' => $validatedData['bolum'],
            'randevutarih' => $validatedData['randevu_tarihi'],
            'mesaj' => $validatedData['mesaj'] ?? null,
            'kayittarihi' => now(), // Mevcut zamanı kaydet
            'ipadresi' => $request->ip(), // Kullanıcının IP adresini kaydet
            'durum' => 'Aktif', // Durumu varsayılan olarak aktif olarak ayarla
        ]);

        // Son eklenen randevunun ID'sini al
        $sonKayitId = $randevu->id;

        // Başarı mesajı ile birlikte kaydı gösteren sayfaya yönlendir
        return view('randevu.kaydet', [
            'adsoyad' => $randevu->adsoyad,
            'email' => $randevu->email,
            'telefon' => $randevu->telno,
            'bolum' => $randevu->bolum,
            'randevu_tarihi' => $randevu->randevutarih,
            'mesaj' => $randevu->mesaj,
            'kayittarihi' => $randevu->kayittarihi,
            'ipadresi' => $randevu->ipadresi,
            'sonKayitId' => $sonKayitId,
        ]);
    }
}
