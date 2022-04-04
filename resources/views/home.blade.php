<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css");
        body {
            font-family: "Catamaran", sans-serif;
        }
        .foto-profile {
            width: 15rem;
        }
        .bg-bulet {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            padding: 15px;
        }
        .photo img {
            border-radius: 8px;
            width: 335px;
            margin-bottom: 20px;
        }
        .e-bg-dark {
            background-color: rgb(33, 40, 50) !important;
        }
    </style>
    <title>Refly Dwiyanto</title>
  </head>
  <body>
    <!-- <div style="margin: 120px">
      <h1>I'm Web Dev &#128585; </h1>
    </div> -->
    <section class="text-center">
      <div class="p-5">
        <img src="{{URL::asset('/reff.jpg')}}" alt="profile Pic" class="foto-profile rounded-circle shadow">
      <h1>selamat datang di portofolio saya</h1>
      <p class="lead">Perkenalkan nama saya Refly Dwiyanto 1901010102 kuliah di salah satu kampus swasta di Mataram <br> dengan jurusan s1 ilmu komputer</p>
      </div>
      <svg style="height: 3rem; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140.54 17.34" preserveAspectRatio="none" fill="#f8f9fa">
        <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
    </section>
    <section class="bg-light text-center">
      <div class="container p-5">
        <div class="row pt-4">
          <div class="col-12 col-md-4">
            <div class="d-flex justify-content-center mb-2">
              <div class="bg-bulet bg-danger text-white pt-4">
                <i class="bi bi-file-earmark-code fs-4"></i>
              </div>
            </div>
            <h4>Ngoding</h4>
            <p class="lead">saya bisa ngoding tp dikit aja</p>
          </div>
          <div class="col-12 col-md-4">
            <div class="d-flex justify-content-center mb-2">
              <div class="bg-bulet bg-warning text-white pt-4">
                <i class="bi bi-controller fs-4"></i>
              </div>
            </div>
            <h4>Game</h4>
            <p class="lead">saya juga suka main game</p>
          </div>
          <div class="col-12 col-md-4">
            <div class="d-flex justify-content-center mb-2">
              <div class="bg-bulet bg-primary text-white pt-4">
                <i class="bi bi-droplet fs-4"></i>
              </div>
            </div>
            <h4>Desain</h4>
            <p class="lead">sama satu lg demen desain</p>
          </div>
        </div>
      </div>
      <svg style="height: 3rem; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140.54 17.34" preserveAspectRatio="none" fill="#fff">
        <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
    </section>
    <section>
      <div class="container photo p-4 w-75 d-none d-sm-block">
        <h2></h2>
        <div class="row p-5">
          <div class="col-12 col-md-4">
            <img src="https://source.unsplash.com/jWQj5Wjepuk/400x300" alt="gambar 1">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/Ecnx13MEPK0/400x500" alt="gambar 1b">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/eUCy1jb_B7I/400x400" alt="gambar 1c">
          </div>
          <div class="col-12 col-md-4">
            <img src="https://source.unsplash.com/cuTcfqsES6o/400x500" alt="gambar 2">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/jipR1oTCO7U/400x400" alt="gambar 2b">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/n3sqjJzZiBM/400x300" alt="gambar 3b">
          </div>
          <div class="col-12 col-md-4">
            <img src="https://source.unsplash.com/Zr7MxECDTQ8/400x300" alt="gambar 3  ">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/QcyenJDqDzw/400x500" alt="gambar 3b">
            <img class="d-sm-none d-md-block" src="https://source.unsplash.com/TIutDBFEtcY/400x400" alt="3c">
          </div>
        </div>
      </div>
      <svg style="height: 3rem; width: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140.54 17.34" preserveAspectRatio="none" fill="#f8f9fa">
        <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
    </section>
    <section class="bg-light">
      <div class="container pt-5 pb-4 text-center">
        <h2>Contact Me</h2>
        <div class="row d-flex justify-content-center mt-5">
          <div class="col-12 col-md-6 ">
            <div class="alert-ku alert alert-success alert-dismissible fade show d-none" role="alert">
              <strong>Terimakasih!</strong> Pesan anda sudah saye terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="card p-5 shadow text-start border-0">
              <form name="zaki-contact-form">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
                  <label for="floatingTextarea2">Pesan</label>
                </div>
                <button type="submit" class="btn btn-kirim btn-primary">Kirim</button>
                <button class="btn btn-loading btn-primary d-none" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </form>
          </div>
        </div>
        </div>
      </div>
    </section>
    <footer class="e-bg-dark text-white">
      <div class="container">
        <div class="d-flex p-5 justify-content-between">
          <span>Copyright &copy; reff 2021</span>
          <span class="d-none d-sm-block">Privacy Policy . Term & Conditions</span>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>