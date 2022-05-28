@extends('layouts.app')

@section('title', 'Profil SD Negeri Haurngombong I')

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
                                Profil Sekolah
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>SD NEGERI HAURNGOMBONG I</h1>
                        <P>
                            Dusun Warungkawat, Haurngombong
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
                        <div class="container pt-5 pb-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p><b>NPSN</b></p>
                                                </li>
                                                <li>
                                                    <p><b>Status</b></p>
                                                </li>
                                                <li>
                                                    <p><b>Bentuk Pendidikan</b></p>
                                                </li>
                                                <li>
                                                    <p><b>Status Kepemilikan</b></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>: 20208832</p>
                                                </li>
                                                <li>
                                                    <p>: Negeri</p>
                                                </li>
                                                <li>
                                                    <p>: Sekolah Dasar</p>
                                                </li>
                                                <li>
                                                    <p>: Pemerintah Daerah</p>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p><b>SK Pendirian Sekolah</b></p>
                                                </li>
                                                <li>
                                                    <p><b>Tanggal SK Pendirian</b></p>
                                                </li>
                                                <li>
                                                    <p><b>SK Izin Operasional</b></p>
                                                </li>
                                                <li>
                                                    <p><b>Tanggal SK Izin Operasional</b></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>: 422/2891/Dikbud/2016</p>
                                                </li>
                                                <li>
                                                    <p>: 2016-08-02</p>
                                                </li>
                                                <li>
                                                    <p>: 421/KEP.167/2004</p>
                                                </li>
                                                <li>
                                                    <p>: 2004-07-28</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        SD NEGERI HAURNGOMBONG I adalah salah satu satuan pendidikan dengan jenjang SD di Haurngombong, Kec. Pamulihan, Kab. Sumedang, Jawa Barat. Dalam menjalankan kegiatannya, SD NEGERI HAURNGOMBONG I berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                                    </p>
                                    <p>
                                        SD NEGERI HAURNGOMBONG I adalah salah satu satuan pendidikan dengan jenjang SD di Haurngombong, Kec. Pamulihan, Kab. Sumedang, Jawa Barat. Dalam menjalankan kegiatannya, SD NEGERI HAURNGOMBONG I berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                                    </p>
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