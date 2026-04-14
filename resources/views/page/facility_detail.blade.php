@extends('layout.app')

@section('content')
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Detail Wahana</h2>
        <p>{{ $wahana->nama }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ Storage::url($wahana->gambar) }}" alt="{{ $wahana->nama }}">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Informasi Wahana</h3>
              <ul>
                <li><strong>Status</strong>: <span class="badge bg-{{ $wahana->status == 'aktif' ? 'success' : ($wahana->status == 'maintenance' ? 'warning' : 'danger') }}">{{ ucfirst($wahana->status) }}</span></li>
                <li><strong>Harga Tiket</strong>: Rp {{ number_format($wahana->harga_tiket, 0, ',', '.') }}</li>
                <li><strong>Jam Operasional</strong>: {{ \Carbon\Carbon::parse($wahana->jam_buka)->format('H:i') }} - {{ \Carbon\Carbon::parse($wahana->jam_tutup)->format('H:i') }}</li>
                <li><strong>Kapasitas</strong>: {{ $wahana->kapasitas ? $wahana->kapasitas . ' Orang' : 'Tidak Dibatasi' }}</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Deskripsi Wahana</h2>
              <p>
                {!! nl2br(e($wahana->deskripsi)) !!}
              </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->
@endsection