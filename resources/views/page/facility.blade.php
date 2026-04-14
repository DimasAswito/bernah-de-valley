@extends('layout.app')

@section('content')
        <section id="portfolio" class="portfolio section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Wahana & Fasilitas</h2>
        <p>Nikmati berbagai wahana dan fasilitas menarik di Bernah De Vallei</p>
    </div><!-- End Section Title -->  

    <div class="container mb-5">
        <div class="row gy-4">
            @forelse($wahanas as $wahana)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-1" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ Storage::url($wahana->gambar) }}" class="card-img-top" alt="{{ $wahana->nama }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold mb-3">{{ $wahana->nama }}</h5>
                        <p class="card-text text-muted mb-4">{{ Str::limit($wahana->deskripsi, 100) }}</p>
                        <div class="mt-auto text-center">
                            <a href="/wahana/detail/{{ $wahana->id }}" class="btn-get-started" style="
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
            @empty
            <div class="col-12 text-center">
                <p>Belum ada data wahana.</p>
            </div>
            @endforelse

        </div>
    </div>
@endsection