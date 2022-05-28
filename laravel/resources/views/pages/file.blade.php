@extends('layouts.app')

@section('title', 'File')

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
                                File
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>FILE UNDUH</h1>
                        <P>
                            File Unduhan yang diupload dari SD Negeri Haurngombong I
                        </P>
                        <hr>

                        <div class="container">
                            <div class="section-page-file row justify-content-center">
                                <div class="col-sm-auto col-md-auto col-lg-12">
                                    <h4>File</h4>
                                    <ol>
                                        <li>
                                            <a href="#">Form Pendaftaran PPDB</a>
                                        </li>
                                        <li>
                                            <a href="#">Form Pengajuan BOS</a>
                                        </li>
                                        <li>
                                            <a href="#">Form Pengajuan BOS</a>
                                        </li>
                                        <li>
                                            <a href="#">Form Pengajuan BOS</a>
                                        </li>
                                        <li>
                                            <a href="#">Form Pengajuan BOS</a>
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