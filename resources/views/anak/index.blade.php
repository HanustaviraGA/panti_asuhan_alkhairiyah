<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ANAK ASUH</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <nav class="navbar">
            <div class="container">
              <a class="navbar-brand text-light" href="{{ url('/') }}">Al-Khairiyah
              </a>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ url('/') }}">BERANDA</a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TENTANG KAMI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/program/">Program</a></li>
                  <li><a class="dropdown-item" href="/Donasi/">Donasi</a></li>
                  <li><a class="dropdown-item" href="{{ route('anak') }}">Anak Asuh</a></li>
                  <li><a class="dropdown-item" href="/Struktur Kepengurusan/">Struktur Kepengurusan</a></li>
                </ul>
              </li>
            </ul>
              <a href="/Login/" class="btn btn-link" role="button">Masuk</a>
          </div>
        </div>
      </nav>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">USIA</th>
            <th scope="col">ASAL DAERAH</th>
            <th scope="col">PENDIDIKAN</th>
            <th scope="col">PRESTASI</th>
            <th scope="col">CITA-CITA</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if(count($anak) > 0)
                @foreach ($anak as $data)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->usia }} Tahun</td>
                    <td>{{ $data->asal_daerah }}</td>
                    <td>{{ $data->pendidikan }}</td>
                    <td>{{ $data->prestasi }}</td>
                    <td>{{ $data->cita_cita }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align: center;">Tidak ada data</td>
                </tr>
            @endif

        </tbody>
      </table>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>
