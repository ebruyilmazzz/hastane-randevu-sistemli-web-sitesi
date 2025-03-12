@extends('layouts.app')

@section('content')
<section id="appointment" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="section-title text-center">
                    <h2>Randevu Detayları</h2>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 200px;">Ad Soyad:</th>
                                <td>{{ $randevu->adsoyad }}</td>
                            </tr>
                            <tr>
                                <th>Telefon:</th>
                                <td>{{ $randevu->telno }}</td>
                            </tr>
                            <tr>
                                <th>E-posta:</th>
                                <td>{{ $randevu->email }}</td>
                            </tr>
                            <tr>
                                <th>Randevu Tarihi:</th>
                                <td>{{ $randevu->randevutarih }}</td>
                            </tr>
                            <tr>
                                <th>Bölüm:</th>
                                <td>{{ $randevu->bolum }}</td>
                            </tr>
                            <tr>
                                <th>Durum:</th>
                                <td>{{ $randevu->durum }}</td>
                            </tr>
                            <tr>
                                <th>Ek Notlar:</th>
                                <td>{{ $randevu->mesaj ?: 'Belirtilmedi' }}</td>
                            </tr>
                            <tr>
                                <th>Kayıt Tarihi:</th>
                                <td>{{ $randevu->kayittarihi }}</td>
                            </tr>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('appointment.index') }}" class="btn btn-secondary">Geri Dön</a>
                            <form action="{{ route('appointment.destroy', $randevu->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Randevuyu iptal etmek istediğinizden emin misiniz?')">Randevuyu İptal Et</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
