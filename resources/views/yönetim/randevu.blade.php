@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Sn. {{ $randevu->adsoyad }}, Randevunuz Başarıyla Alındı</h2>
        <table border="1" width="450" height="250">
            <tr><td><b>Adınız Soyadınız:</b></td><td>{{ $randevu->adsoyad }}</td></tr>
            <tr><td><b>Telefon Numaranız:</b></td><td>{{ $randevu->telno }}</td></tr>
            <tr><td><b>Email Adresiniz:</b></td><td>{{ $randevu->email }}</td></tr>
            <tr><td><b>Randevu Tarihiniz:</b></td><td>{{ $randevu->randevutarih }}</td></tr>
            <tr><td><b>Aldığınız Bölüm:</b></td><td>{{ $randevu->bolum }}</td></tr>
            <tr><td><b>Ek Mesajınız:</b></td><td>{{ $randevu->mesaj }}</td></tr>
        </table>
        <p>Lütfen randevu zamanından 10dk önce geliniz.</p>
        <p>IP Adresi: {{ $randevu->ipadresi }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kayıt Tarihi: {{ $randevu->kayittarihi }}</p>
        
        <a href="{{ route('randevu.yazdir', ['id' => $randevu->id]) }}" class="iletisimbutonu">Kaydet/Yazdır</a>
        <a href="{{ route('randevu.iptal', ['id' => $randevu->id]) }}" class="iletisimbutonu">Randevuyu İptal Et</a>
        <a href="{{ route('home') }}" class="iletisimbutonu">Çıkış</a>
    </div>
@endsection
