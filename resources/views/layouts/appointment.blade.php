@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Randevu Al</h2>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 offset-md-2">
                <form id="appointment-form" role="form" method="POST" action="{{ route('randevu.kayit') }}">
                    @csrf
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Ad Soyad -->
                        <div class="form-group">
                            <label for="adsoyad">Ad Soyad</label>
                            <input type="text" class="form-control" id="adsoyad" name="adsoyad" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Telefon -->
                        <div class="form-group">
                            <label for="telefon">Telefon</label>
                            <input type="tel" class="form-control" id="telefon" name="telefon" required>
                        </div>

                        <!-- Bölüm Seçimi -->
                        <div class="form-group">
                            <label for="bolum">Bölüm</label>
                            <select class="form-control" id="bolum" name="bolum" required>
                                <option value="">Bölüm Seçiniz</option>
                                <option value="Genel Cerrahi">Genel Cerrahi</option>
                                <option value="Kardiyoloji">Kardiyoloji</option>
                                <option value="Diyetisyen">Diyetisyen</option>
                                <option value="Göz">Göz Hastalıkları</option>
                                <option value="KBB">Kulak Burun Boğaz</option>
                            </select>
                        </div>

                        <!-- Randevu Tarihi -->
                        <div class="form-group">
                            <label for="randevu_tarihi">Randevu Tarihi</label>
                            <input type="date" class="form-control" id="randevu_tarihi" name="randevu_tarihi" required>
                        </div>

                        <!-- Ek Notlar -->
                        <div class="form-group">
                            <label for="mesaj">Ek Notlar</label>
                            <textarea class="form-control" rows="3" id="mesaj" name="mesaj"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="form-control" id="cf-submit">Randevu Oluştur</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    #appointment {
        padding: 100px 0;
<<<<<<< HEAD
        background: #941522;
        }
=======
        background: #f9f9f9;
    }
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: 100%;
        box-sizing: border-box;
    }

    button[type="submit"] {
<<<<<<< HEAD
        background: #941522;
=======
        background: #a5c422;
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
        color: white;
        padding: 12px;
        border: none;
        font-size: 16px;
        border-radius: 5px;
        margin-top: 20px;
    }

    button[type="submit"]:hover {
<<<<<<< HEAD
        background: #941522;
        }
=======
        background: #88a41b;
    }
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be

    label {
        font-weight: bold;
        color: #333;
    }
</style>
@endsection
