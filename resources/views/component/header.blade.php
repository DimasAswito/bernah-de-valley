<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/icon.png') }}" style="max-height: 60px;" alt="logo"> 
        {{-- <h1 class="sitename">Kelly</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="#" style="cursor: not-allowed;">Berita</a></li>
          <li><a href="/wahana" class="{{ request()->is('wahana*') ? 'active' : '' }}">Wahana</a></li>
          <li><a href="/galeri" class="{{ request()->is('galeri*') ? 'active' : '' }}">Galeri</a></li>
          <li><a href="/kritik-saran" class="{{ request()->is('kritik-saran*') ? 'active' : '' }}">Kritik & Saran</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          {{-- <li><a href="contact.html">Contact</a></li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.tiktok.com/@bernah.de.vallei?_r=1&_t=ZS-93popXNt5F6" class="tiktok" target="_blank" rel="noopener noreferrer"><i class="bi bi-tiktok"></i></a>
        <a href="https://www.instagram.com/bernahdevalleipacet?igsh=bmk1Y2N5ejg3Z3V0" class="instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/6281311448049" class="whatsapp" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
        {{-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> --}}
      </div>

    </div>
  </header>