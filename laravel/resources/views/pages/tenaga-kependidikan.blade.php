@extends('layouts.app')

@section('title', 'Tenaga Kependidikan')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Profil
                            </li>
                            <li class="breadcrumb-item active">
                                Tenaga Kependidikan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>TENAGA KEPENDIDIKAN</h1>
                        <P>
                            Tenaga Kependidikan yang berperan dan terlibat dalam operasional di Sekolah Dasar Negeri Haurngombong I
                        </P>
                        <div class="gallery-fasilitas">
                            <div class="xzoom-container">
                                <img src="{{url('frontend/images/pengu.jpg')}}" class="xzoom" id="xzoom-default" xoriginal="{{url('frontend/images/pengu.jpg')}}">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{url('frontend/images/header.png')}}">
                                    <img src="{{url('frontend/images/header.png')}}" class="xzoom-gallery" width="205" xpreview="{{url('frontend/images/header.png')}}">
                                </a>
                                <a href="{{url('frontend/images/pengu.jpg')}}">
                                    <img src="{{url('frontend/images/pengu.jpg')}}" class="xzoom-gallery" width="205" xpreview="{{url('frontend/images/pengu.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/header.png')}}">
                                    <img src="{{url('frontend/images/header.png')}}" class="xzoom-gallery" width="205" xpreview="{{url('frontend/images/header.png')}}">
                                </a>
                                <a href="{{url('frontend/images/pengu.jpg')}}">
                                    <img src="{{url('frontend/images/pengu.jpg')}}" class="xzoom-gallery" width="205" xpreview="{{url('frontend/images/pengu.jpg')}}">
                                </a>
                                <a href="{{url('frontend/images/header.png')}}">
                                    <img src="{{url('frontend/images/header.png')}}" class="xzoom-gallery" width="205" xpreview="{{url('frontend/images/header.png')}}">
                                </a>
                            </div>
                        </div>
                        <h3>Data Tenaga Kependidikan</h3>
                        <div class="section section-data-tendik-content" id="tendikContent">
                            <div class="container">
                                <div class="section-data-tendik row justify-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-data-tendik row justify-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-data-tendik row justify-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-data-tendik row justify-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="card card-data-tendik text-center">
                                            <div class="data-tendik-content">
                                                <img src="{{url('frontend/images/guru-1.png')}}" alt="User" class="mb-4 rounded-circle">
                                                <h5 class="mb-4">Raihan, S.Pd</h5>
                                                <p class="data-tendik">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p><b>Umur</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Ijazah</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Jabatan</b></p>
                                                                </li>
                                                                <li>
                                                                    <p><b>Status</b></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p>: 32 Tahun</p>
                                                                </li>
                                                                <li>
                                                                    <p>: S1</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Guru Mapel</p>
                                                                </li>
                                                                <li>
                                                                    <p>: Honor</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">    
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                xoffest: 15
            });
        });
    </script>
    
@endpush