@extends('layouts.app')

@section('title')
    SD Negeri Haurngombong I
    
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Sekolah Adalah Rumah Kedua Bagi Anak</h1>
        <p class="mt-3">Jadikan Sekolah Rumah Keduamu
        </p>
        <a href="{{route('profil-sekolah')}}" class="btn btn-tentang-sekolah-kami px-4 mt-4">
            Tentang Sekolah Kami
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-3 stats-detail">
                    <h2>124</h2>
                    <p>Siswa</p>
                </div>
                <div class="col-3 col-md-3 stats-detail">
                    <h2>12</h2>
                    <p>Rombongan Belajar</p>
                </div>
                <div class="col-3 col-md-3 stats-detail">
                    <h2>18</h2>
                    <p>Tenaga Kependidikan</p>
                </div>
            </section>
        </div>


        <!-- Pengumuman -->
        <section class="section-pengumuman" id="pengumuman">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-pengumuman-heading">
                        <h2>Pengumuman</h2>
                        <p>
                            Informasi Penting dari SD Negeri Haurngombong
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pengumuman-content" id="pengumumanContent">
            <div class="container">
                <div class="section-popular-pengumuman row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-10">
                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('frontend/images/pengu.jpg')">
                            <div class="judul-pengumuman">
                                <h3>Penerimaan Peserta Didik Baru
                                    <br> Periode 2021/2022 Telah Dibuka
                                </h3>
                            </div>
                            <div class="prolog-pengumuman">
                                <p>Jadilah bagian dari keluarga besar
                                    <br> Sekolah Dasar Negeri Haurngombong
                                </p>
                            </div>
                            <div class="pengumuman-button mt-auto">
                                <a href="{{route('pengumuman-detail')}}" class="btn btn-pengumuman-details px-4">
                                     Baca Selengkapnya
                                 </a>
                            </div>
                        </div>
                    </div>
                    <div class="button more-pengumuman-button mt-auto">
                        <a href="{{route('pengumuman')}}" class="btn btn-more-pengumuman-details px-5">
                             Lihat Pengumuman Lebih Banyak
                         </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kegiatan -->
        <section class="section-kegiatan" id="kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-kegiatan-heading">
                        <h2>Kegiatan</h2>
                        <p>
                            Dokumentasi Kegiatan di SDN Haurngombong I
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-kegiatan-content" id="kegiatanContent">
            <div class="container">
                <div class="section-popular-kegiatan row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-5">
                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('frontend/images/pengu.jpg')">
                            <div class="judul-kegiatan">
                                <h4>Lomba Dalam Rangka
                                    <br> HUT RI KE-74
                                </h4>
                            </div>
                            <div class="button kegiatan-button mt-auto">
                                <a href="{{route('kegiatan-detail')}}" class="btn btn-kegiatan-details px-5">
                                     Lihat Kegiatan
                                 </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-5">
                        <div class="card-kegiatan text-center d-flex flex-column" style="background-image: url('frontend/images/pengu.jpg')">
                            <div class="judul-kegiatan">
                                <h4>Lomba Dalam Rangka
                                    <br> HUT RI KE-74
                                </h4>
                            </div>
                            <div class="button kegiatan-button mt-auto">
                                <a href="{{route('kegiatan-detail')}}" class="btn btn-kegiatan-details px-5">
                                     Lihat Kegiatan
                                 </a>
                            </div>
                        </div>
                    </div>
                    <div class="button more-kegiatan-button mt-auto">
                        <a href="{{route('kegiatan')}}" class="btn btn-more-kegiatan-details px-5">
                             Lihat Kegiatan Lebih Banyak
                         </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection