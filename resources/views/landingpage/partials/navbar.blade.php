<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container">
        <a href="{{ url('/') }}"><h1>Klinik</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">Tentang Kami</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#departments">Pendaftaran</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#findUs">Jadwal Dokter</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="{{ url('/dokter') }}">Dokter </a></li>
            <li class="nav-item px-2"><a class="nav-link" href="{{ url('poliklinik/') }}">Poliklinik </a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#findUs">Kontak</a></li>
          </ul>
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('login') }}">Login</a>
          <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-2" href="{{ url('register') }}">Registrasi</a>
        </div>
      </div>
    </nav>