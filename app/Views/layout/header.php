<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?= ($active === 'home') ? 'active' : ''; ?>" href="#hero">Home</a></li>

                <li class="dropdown"><a href="#about"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Profil Prodi PTIK</a></li>
                        <li><a href="#">Visi, Misi, dan Tujuan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Kurikulum</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Prestasi Mahasiswa PTIK</a></li>
                        <li><a href="#">Himpunan Mahasiswa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Portofolio</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->