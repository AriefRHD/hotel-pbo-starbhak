@extends('layout.nav')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('kamar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label">Tipe Kamar</label>
                <input type="text" placeholder="Masukkan Tipe Kamar" class="form-control" name="tipe_kamar" required>
                @error('tipe_kamar')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Kamar</label>
                <input type="text" placeholder="Masukkan Jumlah Kamar" class="form-control" name="jumlah_kamar" required>
                @error('jumlah_kamar')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-outline-danger" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection