@extends('layouts.app')

@section('content')
<section id="appointment" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Randevularım</h2>
                    <p>Mevcut randevularınızı görüntüleyebilir ve yönetebilirsiniz.</p>
                </div>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="text-right mb-4">
                    <a href="{{ route('appointment.create') }}" class="btn btn-primary" style="background-color: #a5c422; border-color: #a5c422;">
                        Yeni Randevu Al
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tarih</th>
                                <th>Bölüm</th>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($randevular ?? [] as $randevu)
                            <tr>
                                <td>{{ $randevu->randevutarih->format('d.m.Y H:i') }}</td>
                                <td>{{ $randevu->bolum }}</td>
                                <td>{{ $randevu->adsoyad }}</td>
                                <td>{{ $randevu->telno }}</td>
                                <td>
                                    <span class="badge {{ $randevu->durum == 'Aktif' ? 'badge-success' : 'badge-secondary' }}">
                                        {{ $randevu->durum }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('appointment.show', $randevu->id) }}" class="btn btn-sm btn-info">Detay</a>
                                    <form action="{{ route('appointment.destroy', $randevu->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Randevuyu iptal etmek istediğinizden emin misiniz?')">İptal Et</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Henüz randevunuz bulunmamaktadır.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
