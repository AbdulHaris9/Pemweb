<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- My CSS -->
      <link rel="stylesheet" href="CSS/style.css"/>
    <!-- Akhir CSS -->

    <title>Portofolio</title>
  </head>
  <body id="beranda">
    
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow-sm fixed-top">
      <div class="container">
        <img src="img/navbar.png" alt="I Made Andhika Pramana Putra" width="50"  class="rounded-circle img-thumbnail me-3" />
        <a class="navbar-brand" href="https://www.instagram.com/andhikaprmn__/">Andhika Pramana Putra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <button class="btn btn-sm btn-outline-success me-2" type="button"><a class="nav-link active" aria-current="page"href="#beranda">Beranda</a></button>
          </li>
          <li class="nav-item">
          <button class="btn btn-sm btn-outline-success me-2" type="button"><a class="nav-link active" aria-current="page"href="#tentang">Tentang</a></button>
          </li>
          <li class="nav-item">
          <button class="btn btn-sm btn-outline-success me-2" type="button"><a class="nav-link active" aria-current="page"href="#galeri">Galeri</a></button>
          </li>
          <li class="nav-item">
          <button 
          class="btn btn-sm btn-outline-success me-2" type="button"><a class="nav-link active" aria-current="page"href="#kontak">Kontak</a> 
        </button>
          </li>
          <li class="nav-item">
          <button class="btn btn-sm btn-outline-danger me-2" type="button" onClick="alert('Anda akan kembali ke halaman awal.')"><a class="nav-link active" aria-current="page"href="/home">Keluar</a></button>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
      <section class="jumbotron text-center">
        <img src="img/profile 2.jpeg" alt="I Made Andhika Pramana Putra" width="150" 
        class="rounded-circle img-thumbnail" />
        <h1 class="display-4">I Made Andhika Pramana Putra</h1>
          <p class="lead">Mahasiswa UNDIKSHA</p>
          <p class="lead">Prodi Pendidikan Teknik Informatika</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#Fff" fill-opacity="1" d="M0,288L288,288L576,256L864,256L1152,64L1440,160L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
      </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
      <section id="tentang">
        <div class="container">
          <div class="row text-center mb-4">
            <div class="col-md">
              <h2>Tentang Saya</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center" >
            <div class="col">
              <p>Lahir pada tanggal 13 maret tahun 2000, saya berasal dari Kabupaaten Jembrana, Kota Negara, Kelurahan Baler Baler Agung, Lingkungan Kebon. Saat ini berusia 21 tahun dan sedang menempuh pendidikan di Universitas Pendidikan Ganesha. Kuliah mulai dari tahun 2019-sekarang. Saya alumni dari SDN 3 Baler Bale Agung, SMPN 2 Negara, dan SMKN 1 Negara. Hobi bermain sepak bola, bulutangkis, futsal, dan menonton film. Keseharian saya pada masa pandemi Covid-19 ini tentunya kuliah seperti biasa, namun dibarengi dengan bekerja sebagai admin bagi salah satu instansi Freelance untuk membantu ekonomi keluarga pada masa pandemi seperti ini. </p>
            </div> 
          </div>
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDD752" fill-opacity="1" d="M0,64L288,64L576,224L864,96L1152,288L1440,160L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>     
    <!-- Akhir about -->

    <!-- Galery -->
    <section id="galeri">
        <div class="container bg-color:#FDD752;"> 
          <div class="row text-center mb-3 ">
            <div class="col">
              <h2>Galeri</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="img/galeri2.jpeg" class="card-img-top" alt="galeri1">
                <div class="card-body">
                   <p class="card-text">Turnamen futsal antar club futsal se-Jembrana pada tahun 2018</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="img/galeri3.jpeg" class="card-img-top" alt="galeri3">
                <div class="card-body">
                   <p class="card-text">Kegiatan camping bersama teman-teman sekelas pada tahun 2019 akhir</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                  <img src="img/galeri4.jpeg" class="card-img-top" alt="galeri4">
                <div class="card-body">
                   <p class="card-text">Sebuah usaha dalam bidang desain, desain tersebut bernama Pets Portrait</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L288,96L576,288L864,160L1152,192L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
      </section>
    <!-- Akhir galery -->

    <!-- Contact -->
        <section id="kontak">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>Kontak</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6">
              <form>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="contoh@gmail.com">
                  </div>
                  <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,128L288,160L576,64L864,128L1152,192L1440,192L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
        </section>
    <!-- Akhir contact -->

    <!-- Footer -->
      <footer class="bg-warning text- text-center pb-4">
        <p> Created by <a href="https://www.instagram.com/andhikaprmn__/" class="text-white fw-bold">I Made Andhika Pramana Putra</a></p>
      </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
