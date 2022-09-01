<?php

namespace App\Http\Controllers\Api;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PemesananResource;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    public function index()
    {
        //get posts
        $pemesanans = Pemesanan::with('kamar')->get();

        //return collection of posts as a resource
        return new PemesananResource(true, 'List Data Pemesanan', $pemesanans);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'checkin'     => 'required',
            'checkout'     => 'required',
            'nama_pemesan'   => 'required',
            'email_pemesan'   => 'required',
            'no_telpon'   => 'required',
            'jumlah_pesan'   => 'required',
            'tipe_kamar_id'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $pemesanan = Pemesanan::create([
            'checkin'   => $request->checkin,
            'checkout'     => $request->checkout,
            'nama_pemesan'   => $request->nama_pemesan,
            'email_pemesan'   => $request->email_pemesan,
            'no_telpon'   => $request->no_telpon,
            'jumlah_pesan'   => $request->jumlah_pesan,
            'tipe_kamar_id'   => $request->tipe_kamar_id,
        ]);

        //return response
        return new PemesananResource(true, 'Pemesanan Berhasil Ditambahkan!', $pemesanan);
    }

    public function show($pemesanan)
    {
        $pemesanans = Pemesanan::with('kamar')->where('id',$pemesanan)->first();
        return new PemesananResource(true, 'Data Post Ditemukan!', $pemesanans);
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'checkin'     => 'required',
            'checkout'     => 'required',
            'nama_pemesan'   => 'required',
            'email_pemesan'   => 'required',
            'no_telpon'   => 'required',
            'jumlah_pesan'   => 'required',
            'tipe_kamar_id'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        {
            $pemesanan->update([
            'checkin'   => $request->checkin,
            'checkout'     => $request->checkout,
            'nama_pemesan'   => $request->nama_pemesan,
            'email_pemesan'   => $request->email_pemesan,
            'no_telpon'   => $request->no_telpon,
            'jumlah_pesan'   => $request->jumlah_pesan,
            'tipe_kamar_id'   => $request->tipe_kamar_id,
            ]);

        }

        //return response
        return new PemesananResource(true, 'Data Pemesanan Berhasil Diubah!', $pemesanan);
    }

    public function destroy(Pemesanan $pemesanan)
    {
        //delete 
        $pemesanan->delete();

        //return response
        return new PemesananResource(true, 'Data Pemesanan Berhasil Dihapus!', null);
    }
}
