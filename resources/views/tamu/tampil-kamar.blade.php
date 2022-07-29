@extends('layout.nav-tamu')
@section('isi')
<div class="card mb-5">
  <div class="card-body">
    <div class="container">
      {{-- <div class="container">
          <h1 class="mt-4 mb-4 fw-bold text-dark">HOTEL HEBAT</h1>
          <img src="{{ asset('gambar/gambar-hotelnya.jpg') }}" class="img-fluid mt-4" alt="..." style="">
      </div> --}}

      <div class="container">
          <h1 class="mt-4 mb-4 text-dark fw-bold">HOTEL HEBAT</h1>
      <div class="row g-3">
          <div class="col-md-12">
            <div class="news">
            <div class="card" style="width: 95%;">
              <img src="{{ asset('gambar/gambar-kolam.jpg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
          <h1 class="mt-4 mb-4 text-dark fw-bold">TIPE SUPERIOR</h1>
          <p>Fasilitas :</p>
          <p>Kamar Berukuran Luas 32 m2</p>
          <p>Kamar Mandi Shower</p>
          <p>Coffe Maker</p>
          <p>AC</p>
          <p>TV LED 32 inch</p>
          <p>Dll.</p>
      </div>
  </div>
      <div class="container">
      <div class="row g-3">
          <div class="col-md-12">
            <div class="news">
            <div class="card" style="width: 95%;">
              <img src="{{ asset('gambar/gambar-kamar.jpg') }}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
          <h1 class="mt-4 mb-4 text-dark fw-bold">TIPE DELUXE</h1>
          <p>Fasilitas :</p>
          <p>Kamar Berukuran Luas 45 m2</p>
          <p>Kamar Mandi Shower Dan Bath Tub</p>
          <p>Coffe Maker</p>
          <p>Sofa</p>
          <p>AC</p>
          <p>TV LED 40 inch</p>
          <p>Dll.</p>
      </div>
  </div>
  </div>
  </div>
</div>

@endsection