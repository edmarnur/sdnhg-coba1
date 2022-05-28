@extends('layouts.app')

@section('title', 'Peserta Didik')

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
                                Peserta Didik
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>PESERTA DIDIK</h1>
                        <P>
                            Peserta Didik yang terdaftar di SD Negeri Haurngombong I
                        </P>
                        <hr>

                        <div class="container">
                            <div class="section-page-peserta-didik row justify-content-center">
                                <div class="col-sm-auto col-md-auto col-lg-12">
                                    <h4>Data Peserta Didik</h4>
                                    <ol>
                                        <li>
                                            <a href="#">Data Peserta Didik SDN Haurngombong Tahun Ajaran 2010/2011</a>
                                        </li>
                                        <li>
                                            <a href="#">Data Peserta Didik SDN Haurngombong Tahun Ajaran 2011/2012</a>
                                        </li>
                                        <li>
                                            <a href="#">Data Peserta Didik SDN Haurngombong Tahun Ajaran 2012/2013</a>
                                        </li>
                                        <li>
                                            <a href="#">Data Peserta Didik SDN Haurngombong Tahun Ajaran 2013/2014</a>
                                        </li>
                                        <li>
                                            <a href="#">Data Peserta Didik SDN Haurngombong Tahun Ajaran 2014/2015</a>
                                        </li>
                                    </ol>

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