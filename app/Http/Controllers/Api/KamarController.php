<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KamarResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index()
    {
        //get kamars
        $kamars = Kamar::latest()->get();

        //return collection of kamars as a resource
        return new KamarResource(true, 'List Data Kamar', $kamars);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tipe_kamar'     => 'required',
            'jumlah_kamar'   => 'required',
            'fasilitas_kamar'   => 'required',
            // 'foto_kamar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('foto_kamar');
        // $image->storeAs('public/kamar', $image->hashName());

        //create post
        $kamar = Kamar::create([
            'tipe_kamar'     => $request->tipe_kamar,
            'jumlah_kamar'   => $request->jumlah_kamar,
            'fasilitas_kamar'=> $request->fasilitas_kamar,
            // 'foto_kamar'     => $image->hashName(),
        ]);

        //return response
        return new KamarResource(true, 'Data Kamar Berhasil Ditambahkan!', $kamar);
    }

    public function show(Kamar $kamar)
    {
        //return single post as a resource
        return new KamarResource(true, 'Data Kamar Ditemukan!', $kamar);
    }

    public function update(Request $request, Kamar $kamar)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tipe_kamar'     => 'required',
            'jumlah_kamar'   => 'required',
            'fasilitas_kamar'   => 'required',
            // 'foto_kamar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if($request) {

            //upload image
            // $image = $request->file('foto_kamar');
            // $image->storeAs('public/kamar', $image->hashName());

            //delete old image
            // Storage::delete('public/kamar/'.$kamar->foto_kamar);

            //update post with new image
            $kamar->update([
            'tipe_kamar'     => $request->tipe_kamar,
            'jumlah_kamar'   => $request->jumlah_kamar,
            'fasilitas_kamar'=> $request->fasilitas_kamar,
            ]);
        }

        //return response
        return new KamarResource(true, 'Data Kamar Berhasil Diubah!', $kamar);
    }

    public function destroy(Kamar $kamar)
    {
        //delete image
        Storage::delete('public/kamar/'.$kamar->image);

        //delete post
        $kamar->delete();
        return new KamarResource(true, 'Data Kamar Berhasil Dihapus!', null);
        //return response
    }
        
}
