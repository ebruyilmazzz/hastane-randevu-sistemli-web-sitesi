@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Üye Ol</h2>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Ad Soyad</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">E-posta Adresi</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <small class="form-text text-muted">Şifreniz en az 6 karakter olmalıdır.</small>
                            </div>

                            <div class="form-group mb-4">
                                <label for="password_confirmation">Şifre Tekrar</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color: #a5c422; border-color: #a5c422;">
                                    Üye Ol
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p>Zaten üye misiniz? <a href="{{ route('login') }}" style="color: #a5c422;">Giriş Yapın</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
