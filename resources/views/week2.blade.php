<html>

<head>
  <title>Bootstrap 2 | Muhammad Ade Dzakwan</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/e4fc499416.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <img src="./materialC/Logo CekDong 1.png" alt="Logo cek dong" class="rounded-circle float-left border border-dark"
      height="80px" />
  </div>
  <div class="container-fluid p-0 pt-3">
    <img src="{{ asset('materialC/Frame 2266.png') }}" width="100%" alt="jumbotron" class="pt-3" />
    <div class="row bg-secondary py-3">
      <div class="col-3 text-center">
        <i class="fa-solid fa-angle-left"></i>
      </div>
      <div class="col-9">Detail Peminjaman</div>
      </div>
    </div>
    <div class="container-fluid px-3 py-0 my-3">
      <div class="row">
        <div class="col-6" class="px-3">
          <div class="rounded-lg shadow-lg p-4 bg-white">
            <img src="./materialC/image 11.png" width="150px" alt="kamera" class="rounded-lg" />
          </div>
        </div>
        <div class="col-6">
          <div>
            <p>Nama:
              <br> Awan
              <br> <hr color="black">
            </p>
          </div>
          <div>
            <p>Acara/kegiatan:
              <br> Liputan pengukuhan professor
              <br> <hr color="black">
            </p>
          </div>
          <div>
            <p>Tanggal:
              <br> 20/11/24 - 22/11/24
              <br> <hr color="black">
            </p>
          </div>
          <div>
            <p>Waktu:
              <br> 07.00 - 17.00
              <br> <hr color="black">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-2">
    <hr color="black">
    <div class="container-fluid">
      <div class="row bg-secondary py-2 rounded-lg">
        <div class="col-6 text-center">
          <img src="{{ asset('materialC/Frame 2377 (1).png') }}" width="100%" alt="canon" class="rounded"/>
          <p class="font-weight-bold my-2">Canon EOS 4000D</p>
        </div>
        <div class="col-6 text-center">
          <p class="font-weight-bold my-2">Deskripsi alat</p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet odio purus.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid my-3">
      <div class="row bg-secondary py-2 rounded-lg">
        <div class="col-6 text-center">
          <img src="{{ asset('materialC/lighting 4.png') }}" width="100%" alt="canon" class="rounded"/>
          <p class="font-weight-bold my-2">Tripod LED 204</p>
        </div>
        <div class="col-6 text-center">
          <p class="font-weight-bold my-2">Deskripsi alat</p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet odio purus.
          </p>
        </div>
      </div>
    </div>
  </div >
</body>

</html>