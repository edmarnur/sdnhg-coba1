@extends('layouts.app')

@section('title', 'Detail Kegiatan')

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
                                Kegiatan
                            </li>
                            <li class="breadcrumb-item active">
                                Detail Kegiatan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>PERPISAHAN KELAS XI PERIODE 2019/2020</h1>
                        <P>
                            3 April 2020
                        </P>
                        <div class="gallery-kegiatan-details">
                            <div class="xzoom-container">
                                <img src="{{url('frontend/images/pengu.jpg')}}" class="xzoom" id="xzoom-default" xoriginal="{{url('frontend/images/pengu.jpg')}}">
                            </div>
                            <div class="xzoom-thumbs-1">
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
                            <div class="xzoom-thumbs-2">
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
                            <div class="xzoom-thumbs-3">
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
                            <div class="xzoom-thumbs-4">
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