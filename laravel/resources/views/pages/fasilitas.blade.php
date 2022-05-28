@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Fasilitas
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>FASILITAS</h1>
                        <P>
                            Fasilitas yang tersedia di SD Negeri Haurngombong I
                        </P>
                        <div class="gallery-fasilitas">
                            <div class="xzoom-container">
                                <img src="frontend/images/pengu.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/pengu.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/header.png">
                                    <img src="frontend/images/header.png" class="xzoom-gallery" width="205" xpreview="frontend/images/header.png">
                                </a>
                                <a href="frontend/images/pengu.jpg">
                                    <img src="frontend/images/pengu.jpg" class="xzoom-gallery" width="205" xpreview="frontend/images/pengu.jpg">
                                </a>
                                <a href="frontend/images/header.png">
                                    <img src="frontend/images/header.png" class="xzoom-gallery" width="205" xpreview="frontend/images/header.png">
                                </a>
                                <a href="frontend/images/pengu.jpg">
                                    <img src="frontend/images/pengu.jpg" class="xzoom-gallery" width="205" xpreview="frontend/images/pengu.jpg">
                                </a>
                                <a href="frontend/images/header.png">
                                    <img src="frontend/images/header.png" class="xzoom-gallery" width="205" xpreview="frontend/images/header.png">
                                </a>
                            </div>
                        </div>
                        <div class="container pt-5 pb-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <p>SD NEGERI HAURNGOMBONG I menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SD NEGERI HAURNGOMBONG I berasal dari PLN. SD NEGERI HAURNGOMBONG I menyediakan akses internet
                                        yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SD NEGERI HAURNGOMBONG I untuk sambungan internetnya adalah Axis.
                                    </p>
                                    <p>SD NEGERI HAURNGOMBONG I menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SD NEGERI HAURNGOMBONG I berasal dari PLN. SD NEGERI HAURNGOMBONG I menyediakan akses internet
                                        yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SD NEGERI HAURNGOMBONG I untuk sambungan internetnya adalah Axis.
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