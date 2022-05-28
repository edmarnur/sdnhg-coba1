@extends('layouts.app')

@section('title', 'Kegiatan')

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
                                Informasi
                            </li>
                            <li class="breadcrumb-item active">
                                Kegiatan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>KEGIATAN</h1>
                        <P>
                            Dokumentasi Kegiatan di SDN Haurngombong I
                        </P>

                        <!-- kegiatan -->
                        <section class="section-page-kegiatan-content" id="kegiatanContent">
                            <div class="container">
                                <div class="section-popular-kegiatan row justify-content-center">
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-kegiatan">
                                                <h4>Lomba Dalam Rangka
                                                    <br> HUT RI KE-74
                                                </h4>
                                            </div>
                                            <div class="tanggal-kegiatan">
                                                <a>21 Agustus 2019</a>
                                            </div>
                                            <div class="button kegiatan-button mt-auto">
                                                <a href="{{route('kegiatan-detail')}}html" class="btn btn-kegiatan-details px-5">
                                                     Lihat Kegiatan
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button more-kegiatan-button mt-auto">
                                        <a href="" class="btn btn-more-kegiatan-details px-5">
                                             Lihat Kegiatan Lebih Banyak
                                         </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection