<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fkamar = FasilitasKamar::with('kamars')->paginate();
        return view('fkamar.fkamar', compact('fkamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datakamar = Kamar::all();
        return view('fkamar.tambahfk', compact('datakamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FasilitasKamar::create([
            'tipe_kamar_id' => $request->tipe_kamar_id,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);
        return redirect('/fkamar')->with('success','Data Fasilitas Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fkamar = FasilitasKamar::findorfail($id);
        $fkamar->delete();
        return redirect('fkamar');
    }
}
