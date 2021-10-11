<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
      <link rel="stylesheet" href="CSS/style.css"/>
    <!-- Akhir CSS -->

    <title>Portofolio | Haris</title>
  </head>
  <body id="beranda">
    
    <!-- Navbar -->
    @include('navbar') 
    
    <!-- Jumbptron -->
      @include('jumbotron')

    {{-- Tentang --}}
      @include('tentang')

    {{-- Galeri --}}
      @include('galeri')
    
    {{-- Kontak --}}
      @include('kontak')

    <!-- Footer -->
      <footer class="bg-warning text- text-center pb-4">
        <p> Created by <a href="https://www.instagram.com/_abdharis99/" class="text-white fw-bold" style="text-decoration:none">Abdul Haris</a></p>
      </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>