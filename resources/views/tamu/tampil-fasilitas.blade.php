@extends('layout.nav-tamu')
@section('isi')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fasilitas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="container">
            <h1 class="mt-4 mb-4 fw-bold">HOTEL HEBAT</h1>
            <img src="{{ asset('gambar/gambar-kamar.jpg') }}" class="img-fluid mt-4" alt="...">
        </div>

        <div class="container mt-4">
          <h1 class="fw-bold text-dark mt-4">Fasilitas</h1>
          <div class="row g-3">
            <div class="col-md-4">
              <div class="news">
              <div class="card" style="width: 400px;">
                <img src="{{ asset('gambar/gambar-kolam.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="mb-4 fw-bold">Kolam Renang</h6>
                </div>
              </div>
            </div>
          </div>
          
            <div class="col-md-4">
              <div class="card" style="width: 400px;">
                <img src="{{ asset('gambar/gambar-makanannya.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="mb-4 fw-bold">Makanan</h6>
                </div>
              </div>
            </div>
          
            <div class="col-md-4">
              <div class="card" style="width: 400px;">
                <img src="{{ asset('gambar/gambar-hotelnya.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="mb-4 fw-bold">Kenyamanan Hotel</h6>
                </div>
              </div>
            </div>
          
          </div>
          </div>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

@endsection