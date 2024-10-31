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
                <a class="nav-link active text-light" aria-current="page" href="{{ route('dashboard') }}">BERANDA</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    TENTANG KAMI
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/AdminProgram/">Program</a></li>
                    <li><a class="dropdown-item" href="/AdminDonasi/">Donasi</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin_anak') }}">Anak Asuh</a></li>
                    <li><a class="dropdown-item" href="/AdminStrukturKepengurusan/">Struktur Kepengurusan</a></li>
                </ul>
            </li>
        </ul>
        <a href="#" class="btn text-light" role="button">Admin</a>
        <a href="{{ route('logout_aksi') }}" class="btn text-light" role="button">Keluar</a>
    </div>
</div>
</nav>

@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@elseif(session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif