<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <nav class="navbar">
            <div class="container">
              <a class="navbar-brand text-light" href="/Beranda/">Al-Khairiyah
              </a>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="/AdminBeranda/">BERANDA</a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TENTANG KAMI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/AdminProgram/">Program</a></li>
                  <li><a class="dropdown-item" href="/AdminDonasi/">Donasi</a></li>
                  <li><a class="dropdown-item" href="/AdminAnakAsuh/">Anak Asuh</a></li>
                  <li><a class="dropdown-item" href="/AdminStrukturKepengurusan/">Struktur Kepengurusan</a></li>
                </ul>
              </li>
            </ul>
              <a href="#" class="btn text-light" role="button">Admin</a>
          </div>
        </div>
      </nav>

      <main class="container mx-auto mt-5 pb-3">
        <h1>Tambah Data Profile</h1>
        <div class="border-top mt-5 pt-5">
      <form>
        <div class="col-md-12">
          <label for="textJudul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="textJudul">
        </div>
        <div class="col-md-12">
          <label for="textDeskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="textDeskripsi">
        </div>
        <br>
        <form>
            <div class="form-group">
              <label for="addFile">Pilih gambar</label>
              <input type="file" class="form-control-file" id="addFile">
            </div>
          </form>
          <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>