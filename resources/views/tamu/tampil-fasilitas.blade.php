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
        <div class="container mt-4 text-center">
            <h2 class="fw-bold">TENTANG KAMI</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est quaerat nulla laudantium totam omnis minus vitae voluptatum tenetur et quisquam. Autem, vel quisquam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus minus eligendi obcaecati. Lorem ipsum dolor sit amet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore iste ab neque ullam quidem iusto reprehenderit qui! Incidunt, id. Exercitationem!</p>
        </div>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

@endsection