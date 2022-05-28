@extends('layouts.app')

@section('title', 'Pengumuman')

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
                                Pengumuman
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>PENGUMUMAN</h1>
                        <P>
                            Informasi Penting dari SD Negeri Haurngombong I
                        </P>

                        <section class="section-page-pengumuman-content" id="PagePengumumanContent">
                            <div class="container">
                                <div class="section-all-pengumuman row justify-content-center">
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-pengumuman">
                                                <h3>Penerimaan Peserta Didik Baru
                                                    <br> Periode 2021/2022 Telah Dibuka
                                                </h3>
                                            </div>
                                            <div class="prolog-pengumuman">
                                                <a>Jadilah bagian dari keluarga besar
                                                    <br> Sekolah Dasar Negeri Haurngombong
                                                </a>
                                            </div>
                                            <div class="pengumuman-button mt-auto">
                                                <a href="{{route('pengumuman-detail')}}" class="btn btn-pengumuman-details px-4">
                                                     Baca Selengkapnya
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-pengumuman">
                                                <h3>Penerimaan Peserta Didik Baru
                                                    <br> Periode 2021/2022 Telah Dibuka
                                                </h3>
                                            </div>
                                            <div class="prolog-pengumuman">
                                                <a>Jadilah bagian dari keluarga besar
                                                    <br> Sekolah Dasar Negeri Haurngombong I
                                                </a>
                                            </div>
                                            <div class="pengumuman-button mt-auto">
                                                <a href="{{route('pengumuman-detail')}}" class="btn btn-pengumuman-details px-4">
                                                     Baca Selengkapnya
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-pengumuman">
                                                <h3>Penerimaan Peserta Didik Baru
                                                    <br> Periode 2021/2022 Telah Dibuka
                                                </h3>
                                            </div>
                                            <div class="prolog-pengumuman">
                                                <a>Jadilah bagian dari keluarga besar
                                                    <br> Sekolah Dasar Negeri Haurngombong
                                                </a>
                                            </div>
                                            <div class="pengumuman-button mt-auto">
                                                <a href="{{route('pengumuman-detail')}}" class="btn btn-pengumuman-details px-4">
                                                     Baca Selengkapnya
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                            <div class="judul-pengumuman">
                                                <h3>Penerimaan Peserta Didik Baru
                                                    <br> Periode 2021/2022 Telah Dibuka
                                                </h3>
                                            </div>
                                            <div class="prolog-pengumuman">
                                                <a>Jadilah bagian dari keluarga besar
                                                    <br> Sekolah Dasar Negeri Haurngombong
                                                </a>
                                            </div>
                                            <div class="pengumuman-button mt-auto">
                                                <a href="{{route('pengumuman-detail')}}" class="btn btn-pengumuman-details px-4">
                                                     Baca Selengkapnya
                                                 </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button more-pengumuman-button mt-auto">
                                        <a href="" class="btn btn-more-pengumuman-details px-5">
                                             Lihat Pengumuman Lebih Banyak
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
