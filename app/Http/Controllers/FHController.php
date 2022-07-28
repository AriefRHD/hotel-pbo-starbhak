<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasHotel;

class FHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fhotel = FasilitasHotel::all();
        return view('fhotel.fhotel', compact('fhotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fhotel.tambahfh');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pt = $request->foto;
        $ptFile = $pt->getClientOriginalName();
        $pt->move(public_path().'/img',$ptFile);
        FasilitasHotel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan' => $request->keterangan,
            'foto' => $ptFile,
        ]);

        return Redirect('/fhotel')->with('success', 'Data Barang berhasil Ditambahkan');
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
        $fhotel = FasilitasHotel::findorfail($id);
        return view('fhotel.edit',compact('fhotel'));
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
        
        $fhotel = FasilitasHotel::findorfail($id);
        $fhotel -> update($request->all());
        if($request->hasFile('foto')){
        $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
        $fhotel->foto = $request->file('foto')->getClientOriginalName();
        $fhotel -> save();
}
        return redirect('/fhotel')->with('success', "Data Fasilitas Hotel Berhasil Di Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = FasilitasHotel::findorfail($id);
        $delete->delete();
        return back()->with('destroy', "Data Fasilitas Hotel Berhasil Di Delete");
    }
}
