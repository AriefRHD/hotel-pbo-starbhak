<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function tampil_kamar()
    {
        return view('tamu.tampil-kamar');
    }
    public function tampil_fasilitas()
    {
        return view('tamu.tampil-fasilitas');
    }
}
