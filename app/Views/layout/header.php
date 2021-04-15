<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link <?= ($active === 'home') ? 'active' : ''; ?>" href="/">Home</a></li>

                <li class="dropdown"><a href="#about" class="<?= ($active === 'profil' || $active === 'visiMisi') ? 'active' : ''; ?>"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/profil" class="<?= ($active === 'profil') ? 'active' : ''; ?>">Profil Prodi PTIK</a></li>
                        <li><a href="/visiMisi" class="<?= ($active === 'visiMisi') ? 'active' : ''; ?>">Visi, Misi, dan Tujuan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="<?= ($active === 'kurikulum') ? 'active' : ''; ?>"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/kurikulum" class="<?= ($active === 'kurikulum') ? 'active' : ''; ?>">Kurikulum</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Prestasi Mahasiswa PTIK</a></li>
                        <li><a href="#">Himpunan Mahasiswa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto <?= ($active === 'portofolio') ? 'active' : ''; ?>" href="#">Portofolio</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->