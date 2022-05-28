@extends('layouts.app')

@section('title', 'Detail Pengumuman')

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
                            <li class="breadcrumb-item">
                                Pengumuman
                            </li>
                            <li class="breadcrumb-item active">
                                Pengumuman Detail
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>Peneriman Peserta Didik Baru Periode 2021/2022 Telah Dibuka</h1>
                        <P>
                            4 Mei 2021
                        </P>

                        <section class="section-page-pengumuman-details-content" id="PagePengumumanContent">
                            <div class="container">
                                <div class="section-all-pengumuman row justify-content-center">
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <div class="card-pengumuman text-center d-flex flex-column" style="background-image: url('{{url('frontend/images/pengu.jpg')}}')">
                                        </div>
                                        <p>
                                            Peneriman Peserta Didik Baru Periode 2021/2022 Telah Dibuka
                                            <br>Bagi para orang tua yang ingin mendaftarkan anaknya ke SD Negeri Haurngombong I, bisa mengisi form pendaftaran ini, atau bisa konsultasi terlebih dahulu melalui whatsapp sesuai dengan jam kerja, yaitu
                                            Senin sampai Sabtu di jam 07:00 - 13:00 WIB. atau bapak/ibu juga dapat langsung mendatangi Sekolah dan menuju ruang guru untuk pendaftaran peserta didik baru
                                        </p>
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