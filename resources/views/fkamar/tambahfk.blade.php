@extends('layout.nav')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fkamar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                <select class="form-select form-control" required aria-label="Default select example" name="tipe_kamar_id">
                    <option selected>Tipe Kamar</option>
                    @foreach($datakamar as $item)
                    <option value="{{ $item->id }}">{{  $item->tipe_kamar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Fasilitas</label>
                <input type="text" placeholder="Masukkan Nama Fasilitas" class="form-control" name="nama_fasilitas" required>
                @error('nama_fasilitas')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-outline-danger" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection