@extends('layout.app')

@section('content')
        <section id="portfolio" class="portfolio section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Wahana & Fasilitas</h2>
        <p>Nikmati berbagai wahana dan fasilitas menarik di Bernah De Vallei</p>
    </div><!-- End Section Title -->  

    <div class="container mb-5">
        <div class="row gy-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-1" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('img/camping.jpg') }}" class="card-img-top" alt="Camping Ground" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold mb-3">Camping Ground</h5>
                        <p class="card-text text-muted mb-4">Area perkemahan luas dengan pemandangan hutan pinus yang asri. Cocok untuk kegiatan pramuka, gathering, atau liburan keluarga.</p>
                        <div class="mt-auto text-center">
                            <a href="/wahana/detail/1" class="btn-get-started" style="
                                color: var(--contrast-color);
                                background: var(--accent-color);
                                font-family: var(--heading-font);
                                text-transform: uppercase;
                                font-weight: 600;
                                font-size: 12px;
                                letter-spacing: 1px;
                                display: inline-block;
                                padding: 10px 30px;
                                border-radius: 50px;
                                transition: 0.5s;
                                text-decoration: none;
                                border: none;
                            ">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-1" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('img/camping.jpg') }}" class="card-img-top" alt="Kolam Renang" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold mb-3">Kolam Renang</h5>
                        <p class="card-text text-muted mb-4">Kolam renang dengan sumber mata air alami pegunungan yang segar dan jernih. Tersedia kolam anak dan dewasa.</p>
                        <div class="mt-auto text-center">
                            <a href="/wahana/detail/2" class="btn-get-started" style="
                                color: var(--contrast-color);
                                background: var(--accent-color);
                                font-family: var(--heading-font);
                                text-transform: uppercase;
                                font-weight: 600;
                                font-size: 12px;
                                letter-spacing: 1px;
                                display: inline-block;
                                padding: 10px 30px;
                                border-radius: 50px;
                                transition: 0.5s;
                                text-decoration: none;
                                border: none;
                            ">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-1" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset('img/camping.jpg') }}" class="card-img-top" alt="Jeep Adventure" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold mb-3">Jeep Adventure</h5>
                        <p class="card-text text-muted mb-4">Jelajahi keindahan alam kaki Gunung Welirang dengan armada Jeep yang tangguh. Pengalaman offroad yang seru dan menantang.</p>
                        <div class="mt-auto text-center">
                            <a href="/wahana/detail/3" class="btn-get-started" style="
                                color: var(--contrast-color);
                                background: var(--accent-color);
                                font-family: var(--heading-font);
                                text-transform: uppercase;
                                font-weight: 600;
                                font-size: 12px;
                                letter-spacing: 1px;
                                display: inline-block;
                                padding: 10px 30px;
                                border-radius: 50px;
                                transition: 0.5s;
                                text-decoration: none;
                                border: none;
                            ">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection