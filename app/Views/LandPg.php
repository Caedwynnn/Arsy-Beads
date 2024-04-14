<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Arsy Beads</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
          object-position: center;
        }
      }

      .map-container-3 iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:relative;
        }
    </style>

</head>
<body class="container text-center" style="background-image: url(foto_produk/wallpaperflare.com_wallpaper.jpg);background-position: cover;background-size: cover;background-repeat: no-repeat;">
  <main>
    <header class="p-3 container-fluid sticky-top" style="background-color: rgb(18, 228, 18);">
      <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a class="d-flex align-items-center mb-2 mb-lg-0 text-black fs-2 fw-bolder text-decoration-none" href="#">
            <img src="<?= base_url('foto_produk/Logo_Arsy.png') ?>" width="50px" style="margin-right: 10px;">
            Arsy Beads
          </a>
  
          <ul class="nav ms-auto col-12 col-lg-auto mb-2 justify-content-center mb-md-0 text-black">
            <li class="nav-item">
              <a class="nav-link active text-black" aria-current="page" href="Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="Produk">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div id="myCarousel" class="carousel slide mb-6 p-3 rounded-circle justify-content-center" data-bs-ride="carousel" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner text-center justify-content-center">
        <div class="carousel-item active" >
          <img class="bd-placeholder-img bg-light" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" src="https://i.pinimg.com/1200x/9f/eb/ff/9febffd15a7a9e06d235ea081e5c1559.jpg">
          <div class="container">
            <div class="carousel-caption text-start" >
              <h1 class="text-black">Tentang Kami</h1>
              <p class="opacity-75 text-black">Kami menyediakan aneka macam gelang, kalung, cincin dan gantungan hp yang dibuat dengan manik-manik. Produk kami menggunakan desain yang menarik dan kekinian.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img bg-light" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" src="https://i.pinimg.com/1200x/9f/eb/ff/9febffd15a7a9e06d235ea081e5c1559.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-black">Cara Pemesanan</h1>
              <p class="opacity-75 text-black">Pesan melalui website kami, atau bisa melalui shopie, tokopedia dan lazada.</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <p class="container-fluid text-black text-center fs-2 fw-bold justify-content-center">Categories</p>

    <div class="row container-fluid text-center bg-light p-1 ms-auto me-auto justify-content-lg-start">
        <div class="col-lg-3 pt-2 pb-2">
            <img class="bd-placeholder-img rounded-circle" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/96/MTA-136153760/brd-60517_flo-necklace-kalung-bunga-tulip-kalung-manik-manik-kalung-korea-aesthetic-kalung-skena_full01-063f7324.jpg" width="140" height="140">
            <h2 class="fs-4">Kalung</h2>
            <p class="fs-6">Berbagai macam kalung dengan model kekinian, Tersedia di Tokopedia, Shopie dan Tiktok Shop.</p>
            <p><a class="btn btn-dark" href="/produk">Tampilkan</a></p>
        </div>
        <div class="col-lg-3 pt-2 pb-2">
            <img class="bd-placeholder-img rounded-circle" src="https://img.lazcdn.com/g/ff/kf/Scf69674e1fe44257912b9531d555580fp.jpg_720x720q80.jpg" width="140" height="140">
            <h2 class="fs-4">Cincin</h2>
            <p class="fs-6">Berbagai macam cincin dengan model kekinian, Tersedia di Tokopedia, Shopie dan Tiktok Shop.</p>
            <p><a class="btn btn-dark" href="#">Tampilkan</a></p>
        </div>
        <div class="col-lg-3 pt-2 pb-2">
            <img class="bd-placeholder-img rounded-circle" src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/7/25/71e88d81-7647-4748-ab61-c0ed8636c8ff.jpg" width="140" height="140">
            <h2 class="fs-4">Gelang</h2>
            <p class="fs-6">Berbagai macam gelang dengan model kekinian, Tersedia di Tokopedia, Shopie dan Tiktok Shop.</p>
            <p><a class="btn btn-dark" href="#">Tampilkan</a></p>
        </div>
        <div class="col-lg-3 pt-2 pb-2">
            <img class="bd-placeholder-img rounded-circle" src="https://img.lazcdn.com/g/ff/kf/S53a2aa2a1fe54f12ab88bd670f5615ffK.jpg_720x720q80.jpg" width="140" height="140">
            <h2 class="fs-4">Gantungan HP</h2>
            <p class="fs-6">Berbagai macam gantungan hp dengan model kekinian, Tersedia di Tokopedia, Shopie dan Tiktok Shop.</p>
            <p><a class="btn btn-dark" href="#">Tampilkan</a></p>
        </div>
    </div>

    <div class="card m-3">
      <div class="card-body">
        <p class="fw-bold fs-4">Lokasi Kami</p>
        <p class="card-text fs-6">Waringinsari  5 Rt 01 Rw 23 ngropoh condong catur Depok Sleman yogyakarta. No rumah 17D</p>
      </div>
    </div>

    <div class="container-fluid">
      <footer>
        <ul class="nav justify-content-center p-4 text-black" style="background-color: rgb(18, 228, 18);">
            <li class="nav-item" style="padding-right: 10px;"><a href="https://wa.me/6282259540730" class="nav-link px-2 text-body-secondary"><img src="foto_produk/WA.png" alt="Whatsapp" width="30px"></a>Whatsapp</li>
            <li class="nav-item" style="padding-right: 10px;"><a href="#" class="nav-link px-2 text-body-secondary"><img src="foto_produk/Shopee.png" alt="Shopee" width="30px"></a>ArsyBeads</li>
            <li class="nav-item" style="padding-right: 10px;"><a href="#" class="nav-link px-2 text-body-secondary"><img src="foto_produk/Tokped.png" width="30px" alt="Tokopedia"></a>ArsyBeads</li>
        </ul>
        <div class="ps-3 pe-3 d-flex text-center justify-content-center pt-1 text-black" style="background-color: rgb(45, 109, 45);">
          <p>&copy;Arsy Beads | ALL RIGHTS RESERVED.</p>
        </div>
      </footer>
    </div>
  </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>