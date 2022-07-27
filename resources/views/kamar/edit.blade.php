@extends('layout.nav')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('kamar',$kamar->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tipe Kamar</label>
                <input type="text" placeholder="Masukkan Tipe Kamar" class="form-control"
                    value="{{ $kamar->tipe_kamar }}" name="tipe_kamar" required>
                @error('tipe_kamar')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Kamar</label>
                <input type="text" placeholder="Masukkan Jumlah Kamar" class="form-control"
                    value="{{ $kamar->jumlah_kamar }}" name="jumlah_kamar" required>
                @error('jumlah_kamar')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-outline-danger" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection