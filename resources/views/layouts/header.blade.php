<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                @auth
                    <p>Hoş geldiniz, {{ Auth::user()->name }} | 
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" style="background: none; border: none; color: #a5c422; padding: 0; text-decoration: underline; cursor: pointer;">Çıkış Yap</button>
                        </form>
                    </p>
                @else
<<<<<<< HEAD
                <p><a href="{{ route('login') }}">Giriş Yap</a> / <a href="{{ route('register') }}">Üye Ol</a></p> 
                 @endauth
=======
                    <p><a href="{{ route('login') }}">Giriş Yap</a> / <a href="{{ route('register') }}">Üye Ol</a></p>
                @endauth
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            </div>
            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> (505)685 55 88</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 - 18:00 (Pzt-Cum)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">iletisim@gmail.com</a></span>
            </div>
        </div>
    </div>
</header>

<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="{{ route('home') }}" class="navbar-brand"><i class="fa fa-stethoscope"></i> YILMAZ HASTANESİ</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD
                <li><a href="{{ route('home') }}">Anasayfa</a></li>
                @if(Route::currentRouteName() == 'home')
                    <li><a href="#about" class="smoothScroll">Hakkımızda</a></li>
                    <li><a href="#team" class="smoothScroll">Doktorlarımız</a></li>
                @else
                    <li><a href="{{ route('home') }}#about">Hakkımızda</a></li>
                    <li><a href="{{ route('home') }}#team">Doktorlarımız</a></li>
                    <li><a href="{{ route('home') }}#footer">İletişim</a></li>
                @endif
=======
                <li><a href="{{ route('home') }}" class="smoothScroll">Anasayfa</a></li>
                <li><a href="{{ route('home') }}#about" class="smoothScroll">Hakkımızda</a></li>
                <li><a href="{{ route('home') }}#team" class="smoothScroll">Doktorlarımız</a></li>
                <li><a href="{{ route('home') }}#footer" class="smoothScroll">İletişim</a></li>
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
                <li class="appointment-btn"><a href="{{ route('appointment.create') }}">Randevu Al</a></li>
            </ul>
        </div>
    </div>
</section>