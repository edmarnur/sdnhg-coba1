<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function pengumuman(Request $request)
    {
        return view('pages.pengumuman');
    }
    public function pengumumandetail(Request $request)
    {
        return view('pages.pengumuman-detail');
    }

    public function kegiatan(Request $request)
    {
        return view('pages.kegiatan');
    }
    public function kegiatandetail(Request $request)
    {
        return view('pages.kegiatan-detail');
    }

    public function file(Request $request)
    {
        return view('pages.file');
    }
}
