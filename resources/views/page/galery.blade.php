@extends('layout.app')

@section('content')
     <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri</h2>
        {{-- <p>Foto dan Video di Bernah De Valley</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-wahana">Wahana</li>
            <li data-filter=".filter-fasilitas">Fasilitas</li>
            <li data-filter=".filter-kegiatan">Kegiatan</li>
            <li data-filter=".filter-umum">Umum</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @forelse($galeris as $galeri)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $galeri->kategori }}">
              <img src="{{ Storage::url($galeri->file_path) }}" class="img-fluid" alt="{{ $galeri->judul }}">
              <div class="portfolio-info">
                <h4>{{ $galeri->judul }}</h4>
                <p>{{ $galeri->deskripsi ? Str::limit($galeri->deskripsi, 50) : ucfirst($galeri->kategori) }}</p>
                <a href="{{ Storage::url($galeri->file_path) }}" title="{{ $galeri->judul }}" data-gallery="portfolio-gallery-{{ $galeri->kategori }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @empty
            <div class="col-12 text-center">
              <p>Belum ada foto/video di galeri.</p>
            </div>
            @endforelse

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
@endsection