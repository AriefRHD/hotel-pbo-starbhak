@extends('layout.nav-tamu')
@section('isi')
<div class="card mb-5">
    <div class="card-body ">
        <div class="container">
            <div class="container">
                <h1 class="mt-4 mb-4 fw-bold">HOTEL HEBAT</h1>
                <img src="{{ asset('gambar/gambar-kamar.jpg') }}" class="img-fluid mt-4" alt="...">
            </div>
    
            <div class="container mt-4">
                <h1 class="fw-bold text-dark mt-4">Fasilitas</h1>
                <div class="row g-3 mb-5">
                    <div class="col-md-4">
                        <div class="news">
                            <div class="card" style="width: 285px;">
                                <img src="{{ asset('gambar/gambar-kolam.jpg') }}" style="height: 150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="mb-4 fw-bold">Kolam Renang</h6>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="card" style="width: 285px;">
                            <img src="{{ asset('gambar/gambar-makanannya.jpg') }}" style="height: 150px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="mb-4 fw-bold">Makanan</h6>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="card" style="width: 270px;">
                            <img src="{{ asset('gambar/kenyamanan.jpg') }}" style="height: 150px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="mb-4 fw-bold">Kenyamanan Hotel</h6>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
