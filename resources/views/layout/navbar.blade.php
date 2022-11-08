<!-- Navigation-->
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background-color: brown" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Website Ratih Juningsih</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item{{ Route::is('masthead') ? 'active' : ''}}">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('masthead') }}">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li class="nav-item{{ Route::is('gallery') ? 'active' : ''}}">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('gallery') }}">
                        <i class="fa-solid fa-image"></i> Gallery
                    </a>
                </li>
                <li class="nav-item{{ Route::is('about') ? 'active' : ''}}">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('about') }}">
                        <i class="fa-solid fa-download"></i> About
                    </a>
                </li>
                <li class="nav-item{{ Route::is('contact') ? 'active' : ''}}">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('contact') }}">
                        <i class="fas fa-address-book"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
