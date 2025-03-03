@extends('layouts.app')

@section('content')
<section id="appointment" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="section-title text-center">
                    <h2>Randevu Al</h2>
                    <p>Lütfen randevu bilgilerinizi doldurun.</p>
                </div>

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('appointment.store') }}" method="POST" class="appointment-form">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="adsoyad">Ad Soyad</label>
                        <input type="text" class="form-control" id="adsoyad" name="adsoyad" 
                            value="{{ old('adsoyad', Auth::user()->name) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="telno">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="telno" name="telno" 
                            value="{{ old('telno') }}" required 
                            placeholder="05XX XXX XX XX">
                    </div>

                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">

                    <div class="form-group mb-3">
                        <label for="randevutarih">Randevu Tarihi</label>
                        <input type="datetime-local" class="form-control" id="randevutarih" 
                            name="randevutarih" value="{{ old('randevutarih') }}" 
                            min="{{ date('Y-m-d\TH:i', strtotime('+1 day')) }}"
                            required>
                        <small class="form-text text-muted">Randevu tarihi bugünden sonra olmalıdır.</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="bolum">Bölüm</label>
                        <select name="bolum" id="bolum" class="form-control" required>
                            <option value="">Bölüm Seçiniz</option>
                            <option value="Dahiliye" {{ old('bolum') == 'Dahiliye' ? 'selected' : '' }}>Dahiliye</option>
                            <option value="Kardiyoloji" {{ old('bolum') == 'Kardiyoloji' ? 'selected' : '' }}>Kardiyoloji</option>
                            <option value="Ortopedi" {{ old('bolum') == 'Ortopedi' ? 'selected' : '' }}>Ortopedi</option>
                            <option value="Göz" {{ old('bolum') == 'Göz' ? 'selected' : '' }}>Göz</option>
                            <option value="KBB" {{ old('bolum') == 'KBB' ? 'selected' : '' }}>KBB</option>
                            <option value="Nöroloji" {{ old('bolum') == 'Nöroloji' ? 'selected' : '' }}>Nöroloji</option>
                            <option value="Psikiyatri" {{ old('bolum') == 'Psikiyatri' ? 'selected' : '' }}>Psikiyatri</option>
                            <option value="Dermatoloji" {{ old('bolum') == 'Dermatoloji' ? 'selected' : '' }}>Dermatoloji</option>
                            <option value="Üroloji" {{ old('bolum') == 'Üroloji' ? 'selected' : '' }}>Üroloji</option>
                            <option value="Genel Cerrahi" {{ old('bolum') == 'Genel Cerrahi' ? 'selected' : '' }}>Genel Cerrahi</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="mesaj">Ek Notlar (İsteğe Bağlı)</label>
                        <textarea name="mesaj" id="mesaj" class="form-control" rows="4" 
                            placeholder="Doktora iletmek istediğiniz ek bilgileri buraya yazabilirsiniz.">{{ old('mesaj') }}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #a5c422; border-color: #a5c422;">
                            Randevu Oluştur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
