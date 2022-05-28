<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil(Request $request)
    {
        return view('pages.profil-sekolah');
    }

    public function visimisi(Request $request)
    {
        return view('pages.visi-misi');
    }

    public function tendik(Request $request)
    {
        return view('pages.tenaga-kependidikan');
    }

    public function pesertadidik(Request $request)
    {
        return view('pages.peserta-didik');
    }
}
