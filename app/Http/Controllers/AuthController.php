<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest')->except(['logout']);
=======
        $this->middleware('guest')->except('logout');
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
    }

    // Giriş Sayfasını Göster
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Kullanıcı Girişi
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
<<<<<<< HEAD
            
            // Direkt olarak randevu sayfasına yönlendir
            return redirect('/appointment')->with('success', 'Başarıyla giriş yaptınız!');
=======
            return redirect()->route('appointment.index')->with('success', 'Başarıyla giriş yaptınız!');
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
        }

        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
        ])->onlyInput('email');
    }

    // Kullanıcı Çıkışı
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
<<<<<<< HEAD
        return redirect('/')->with('success', 'Başarıyla çıkış yaptınız.');
=======
        return redirect()->route('home')->with('success', 'Başarıyla çıkış yaptınız.');
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
    }

    // Kayıt Sayfasını Göster
    public function showRegisterForm()
    {
        return view('auth.register');
    }
<<<<<<< HEAD
    
=======
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be

    // Yeni Kullanıcı Kaydı
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.required' => 'Şifre alanı zorunludur.',
            'password.min' => 'Şifre en az 6 karakter olmalıdır.',
            'password.confirmed' => 'Şifreler eşleşmiyor.',
        ]);

<<<<<<< HEAD
        $user = User::create([
=======
        User::create([
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

<<<<<<< HEAD
        Auth::login($user);
        // Direkt olarak randevu sayfasına yönlendir
        return redirect('/appointment')->with('success', 'Kayıt başarılı! Hoş geldiniz.');
=======
        return redirect()->route('login')->with('success', 'Kayıt başarılı! Şimdi giriş yapabilirsiniz.');
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
    }
}
