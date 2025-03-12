<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $email = config('mail.from.address'); // veya direkt 'iletisim@gmail.com'
        return view('iletisim', compact('email'));
    }
    
=======
        return view('iletisim.contact');
    }

>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Burada mesajı veritabanına kaydedebilir veya e-posta gönderebilirsiniz
        
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.');
    }
}
