@extends('layout.index')

@section('content')
<section class="page-section bg-dark text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white p-4">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto"><p class="lead">Saya adalah mahasiswa semester III angkatan 2021 Amik Bumi Nusantara.</p></div>
            <div class="col-lg-4 me-auto"><p class="lead">Kalian bisa panggil saya dengan sebutan Ratih!</p></div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download me-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>

@endsection
