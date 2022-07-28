@extends('layout.nav-tamu')
@section('isi')
<div class="card">
    <div class="card-body">
        <form action="{{ url('pemesanan') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label">Check In</label>
                <input type="date" placeholder="Masukkan Tanggal Check In" class="form-control" name="checkin" required>
                @error('checkin')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Check Out</label>
                <input type="date" placeholder="Masukkan Tanggal Check Out" class="form-control" name="checkout" required>
                @error('checkout')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pemesan</label>
                <input type="text" placeholder="Masukkan Nama Pemesan" class="form-control" name="nama_pemesan" required>
                @error('nama_pemesan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">No Telepon</label>
                <input type="text" placeholder="Masukkan No Telepon" class="form-control" name="notelpon" required>
                @error('notelpon')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email Pemesan</label>
                <input type="email" placeholder="Masukkan Email Pemesan" class="form-control" name="email_pemesan" required>
                @error('email_pemesan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Tamu</label>
                <input type="text" placeholder="Masukkan Nama Tamu" class="form-control" name="nama_tamu" required>
                @error('nama_tamu')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                <select class="form-select form-control" required aria-label="Default select example" name="tipe_kamar_id">
                    <option selected>Tipe Kamar</option>
                    @foreach($datakamar as $item)
                    <option value="{{ $item->id }}">{{  $item->tipe_kamar }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-outline-danger" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection