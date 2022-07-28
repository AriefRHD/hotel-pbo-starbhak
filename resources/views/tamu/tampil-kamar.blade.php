@extends('layout.nav-tamu')
@section('isi')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
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
                  <div class="card" style="width: 95%; height: 500px;">
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
                  <div class="card" style="width: 95%; height: 500px;">
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
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

@endsection