<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="icon" href="dist/img/wisnu.jpg">
    <title></title>
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
          }
        }
        .bg{
            background-image: url("dist/img/bg2.jfif")
          }
        .form-control{
          background-image: url("")
        }
        .card-body{
          background-image: url("")
        }
      </style>
      <link href="carousel.css" rel="stylesheet">
  </head>
  <body class="bg">
    {{-- @foreach ($infos as $item) --}}
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="dist/img/wisnu.jpg" width="50" height="50" alt="logo"><span style="font-family: serif;">PT</b>Sarana Media Selular</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Masuk
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (Route::has('register'))
                    <li><a class="dropdown-item"  href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                    @endif
                    <li><a class="dropdown-item"  href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{__('/view_login')}}">Login Administrator</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
      <br>
      <br>
      <br>
      <div class="form-control">
         <marquee style="font-family: optima"></marquee> 
        </div>
          <main>

              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="dist/img/photo1.png"  width="200" height="500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                     <img src="dist/img/photo2.png"  width="200" height="500"  class="d-block w-100" alt="...">
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
              
              
                <!-- Marketing messaging and featurettes
                ================================================== -->
                <!-- Wrap the rest of the page in another container to center all the content. -->
                {{-- <div class="form-control bg-warning">
                  <div class="link-group" role="group" aria-label="Basic example">
                    <a href="" title="Costumer Service"><img src="{{asset('image/whatsapp.png')}}" class="icon" width="40" height="40" alt=""></a>
                    <a href="" title="Instagram"><img src="{{asset('image/instagram.png')}}" class="icon" width="40" height="40" alt=""></a>
                    <a href="" title="Youtube"><img src="{{asset('image/youtube.png')}}" class="icon" width="40" height="40" alt=""></a>
                  </div> 
                </div> --}}
                {{-- <div class="container marketing ">
              
                  <!-- Three columns of text below the carousel -->
                  <div align="center" class="col-md-12 border border-dark">
                      <div class="card">
                        <div class="card-body">
                          <h3 align="center" class="form-control"><marquee behavior="" direction="" style="font-family: optima">PANDUAN PENDAFTARAN MAHASISWA BARU</marquee></h3>
                          <p>Sebelum Login Calon Mahasiswa diharuskan untuk melakukan Registrasi, silahkan klik Menu <a href="{{route('register')}}" class="btn btn-warning btn-sm"><i class="fa fa-registered">Registrasi</i></a> pada tab Masuk dan isi sesuai data anda. Mohon Email dan Password untuk diingat!</p>
                          <p>Setelah melakukan Registrasi, Persiapkan berkas-berkas berikut :</p> <br>
                          <div class="badge bg-primary text-wrap" style="width: 8rem; height: 13rem;"><h4 style="font-family:'optima"></h4></div>
                          <br>
                          <p>File dapat berupa hasil SCAN atau Foto kamera<br/> Ukuran File silakan ubah menjadi di bawah 1 MB agar mudah di upload<br/>
                            Jika semua persiapan sudah lengkap silakan klik menu tab <a href="{{route('login')}}" class="btn btn-success btn-sm"><i class="fa fa-sign-in">Login</i></a> dan LENGKAPI serta UPLOAD Data Anda</p>
                           <br>
                          <a href="" class="btn btn-info"><i class="fa fa-download">Formulir Pendaftaran</i></a><br>
                          <p></p>
                          <a href="" class="btn btn-info"><i class="fa fa-download">Formulir Pendaftaran PIP</i></a>
                          <a href="" class="btn btn-warning"><i class="fa fa-download">EX: Surat Fakta Integritas PIP</i></a>
                          <a href="" class="btn btn-warning"><i class="fa fa-download">EX: Surat Pernyataan Penghasilan</i></a>
                        </div>
                      </div>
                  </div>
               </div><!-- /.container -->  
            </div> --}}
                <!-- FOOTER -->
                <footer class="container">
                  <p>&copy;2022, Inc. &middot;</p>
                </footer>
              
            <!-- Optional JavaScript; choose one of the two! -->
          </main>   
      
 
  {{-- @endforeach --}}
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>