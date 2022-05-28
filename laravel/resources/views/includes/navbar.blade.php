<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{url('/')}}" class="navbar-brand">
            <img src="{{url('frontend/images/logo-name.png')}}" alt="logo SDN">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">

        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{url('/')}}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Profil
                </a>
                    <div class="dropdown-menu">
                        <a href="{{route('profil-sekolah')}}" class="dropdown-item">Profil Sekolah</a>
                        <a href="{{route('visi-misi')}}" class="dropdown-item">Visi dan Misi</a>
                        <a href="{{route('tenaga-kependidikan')}}" class="dropdown-item">Tenaga Kependidikan</a>
                        <a href="{{route('peserta-didik')}}" class="dropdown-item">Peserta Didik</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('fasilitas')}}" class="nav-link">Fasilitas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Informasi
                </a>
                    <div class="dropdown-menu">
                        <a href="{{route('pengumuman')}}" class="dropdown-item">Pengumuman</a>
                        <a href="{{route('kegiatan')}}" class="dropdown-item">Kegiatan</a>
                        <a href="{{route('file')}}" class="dropdown-item">File</a>
                    </div>
                </li>
            </ul>

            <!-- Mobile Button -->
            <form action="" class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0">
                    Masuk                        
                </button>
            </form>

            <!-- Desktop Button -->
            <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Masuk                        
                </button>
            </form>

        </div>
    </nav>
</div>