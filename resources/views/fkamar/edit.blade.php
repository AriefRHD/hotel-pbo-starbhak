@extends('layout.nav')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fhotel',$fhotel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Fasilitas</label>
                <input type="text" placeholder="Masukkan Fasilitas Hotel" class="form-control"
                    value="{{ $fhotel->nama_fasilitas }}" name="nama_fasilitas" required>
                @error('nama_fasilitas')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" placeholder="Masukkan Keterangan" class="form-control"
                    value="{{ $fhotel->keterangan }}" name="keterangan" required>
                @error('keterangan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Fasilitas</label>
                <input type="file" class="form-control" name="foto">
                @error('foto')
                <div class="text-warning">{{ $message }}</div>
                @enderror
                <img src="{{ asset('img/'.$fhotel->foto) }}" alt="" style="width: 30%" class="mt-3">
            </div>
            <button class="btn btn-outline-danger" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection