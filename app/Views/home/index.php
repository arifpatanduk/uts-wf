<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>PTIK</span></h1>
        <h2>Informatics Education Program, Faculty of Teacher Training and Education, UNS.</h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/ijdrsNmd1YE" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Video Profile</span></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Bidang Peminatan ======= -->
    <section id="featured-services" class="featured-services uns-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Bidang Peminatan</h2>
                <p>Bidang peminatan di program studi Pendidikan Teknik Informatika dan Komputer (PTIK) dibagi menjadi 3 peminatan utama antara lain yakni:</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#rpl">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class='bx bx-code-alt'></i></div>
                            <h4 class="title">RPL</h4>
                            <p class="description">Rekayasa Perangkat Lunak (RPL) merupakan salah satu bidang yang ...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#tkj">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class='bx bxl-tux'></i></div>
                            <h4 class="title">TKJ</h4>
                            <p class="description">Teknik Komputer dan Jaringan (TKJ) merupakan salah satu bidang yang ...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#mm">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class='bx bx-video-recording'></i></div>
                            <h4 class="title">Multimedia</h4>
                            <p class="description">Multimedia (MM) merupakan salah satu bidang yang mempelajari tentang ...</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End Bidang Peminatan -->

    <!-- Modal Bidang Peminatan -->
    <!-- Modal RPL -->
    <div class="modal fade" id="rpl" tabindex="-1" aria-labelledby="rplLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rplLabel">Rekayasa Perangkat Lunak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Rekayasa Perangkat Lunak (RPL) merupakan salah satu bidang yang mempelajari dan mendalami terkait cara-cara pengembangan perangkat lunak. Pengembangan perangkat lunak didalamnya sudah termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak, dan manajemen kualitas.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal TKJ -->
    <div class="modal fade" id="tkj" tabindex="-1" aria-labelledby="tkjLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tkjLabel">Teknik Komputer dan Jaringan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Teknik Komputer dan Jaringan (TKJ) merupakan salah satu bidang yang mendalami terkait dengan kemampuan algoritma, dan pemrograman komputer, trouble shooting permasalahan komputer dan jaringan komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Multimedia -->
    <div class="modal fade" id="mm" tabindex="-1" aria-labelledby="mmLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mmLabel">Multimedia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Multimedia (MM) merupakan salah satu bidang yang mempelajari tentang desain grafis dan percetakan, pengembangan multimedia (baik cetak maupun digital), pengembangan permainan (biasanya membangun sebuah game berbasis 2D ataupun 3D), hingga tentang produksi sinema dan perfilman menggunakan teknik audio video.
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Bidang Peminatan -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Profil PTIK</h2>
                <!-- <p>.</p> -->
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="/img/profil.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Pendidikan Teknologi Informatika dan Komputer</h3>
                    <p class="fst-italic">
                        Program studi Pendidikan Teknologi Informatika dan Komputer (PTIK) direncanakan bernaung dalam pengelolaan jurusan Pendidikan Teknik dan Kejuruan (PTK)
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <p>
                                    PTIK merupakan program studi yang akan menghasilkan lulusan yang diutamakan akan mengajar dalam program vokasi/kejuruan.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <p>Mata kuliah yang membedakan program studi PTIK dengan program studi lain di FKIP UNS terletak pada mata kuliah pendukung kompetensi profesional yang menitikberatkan pada bidang Ilmu teknologi informatika dan komputer.</p>
                            </div>
                        </li>

                        <a href="/profil" class="text-decoration-none float-end">
                            Selengkapnya ...
                        </a>

                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services uns-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PTIK News</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="/img/news/V-Profile-PTIK.jpg" class="card-img-top img-vertical" alt="...">
                        <div class="card-body m-3 m-3">
                            <h5 class="card-title">Video Profile PTIK 2021 Branding dengan semangat kompetisi</h5>
                            <p class="text-secondary">
                                <i class='bx bx-calendar'></i>
                                28 February 2021
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="/img/news/Pengabdian-ke-Permikomnas.jpg" class="card-img-top img-vertical" alt="...">
                        <div class="card-body m-3">
                            <h5 class="card-title">Pengabdian Masyarakat ke Desa Kemuning Bersama Permikomnas
                            </h5>
                            <p class="text-secondary">
                                <i class='bx bx-calendar'></i>
                                28 February 2021
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="/img/news/reor.jpg" class="card-img-top img-vertical" alt="...">
                        <div class="card-body m-3">
                            <h5 class="card-title">Reorganisasi HMP MIKROPTIK Periode 2020/2021 Pertama secara Daring</h5>
                            <p class="text-secondary">
                                <i class='bx bx-calendar'></i>
                                19 February 2021
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team biru-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PTIK JUARA</h2>
            </div>

            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#prestasi1">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/prestasi/kid.png" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Mahasiswa PTIK Finalis Kompetisi Inovasi Digital UNS Fintech Center 2020</h5>
                            <p class="card-text">
                                Tim BLESSED yang diketuai oleh Arif Wiranata Patanduk merupakan salah satu finalis KID 2020 yang berinovasi di Sektor Pendidikan dengan judul inovasi "WIYATA : Platform Marketplace e-learning untuk Optimalisasi Pendidikan Indonesia"</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class='bx bx-calendar'></i>
                                    7 November 2020
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#prestasi2">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/prestasi/bisplan.jpg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Mahasiswa PTIK Juara 3 Lomba Business IT Case Nasional</h5>
                            <p class="card-text">Arif Wiranata Patanduk, Angelly Rantika Putri, dan Andria Puspitasari berhasil meraih Juara 3 pada Lomba Business Plan National Competition Technology Euphoria 2020.</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class='bx bx-calendar'></i>
                                    30 Oktober 2020
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#prestasi3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/prestasi/a2.jpg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Mahasiswa PTIK Sabet Medali Perunggu di Jepang</h5>
                            <p class="card-text">Mahasiswa Universitas Sebelas Maret (UNS) Surakarta berhasil meraih medali perunggu dalam ajang Advanced Innovation Jam (AI-JAM) Japan 2019 yang digelar di Accenture Innovation Hub Tokyo, Minggu (8/12/2019).</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class='bx bx-calendar'></i>
                                    12 January 2020
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/prestasi" class="text-decoration-none float-end my-3">
                Selengkapnya ...
            </a>

        </div>

        <?= $this->include('kemahasiswaan/modal-prestasi'); ?>

    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact uns-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Kampus V JPTK FKIP UNS Pabelan</h3>
                        <p>Jl. Jend. Ahmad Yani 200A Pabelan, Kartasura, Sukoharjo 57100</p>


                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>ptik@fkip.uns.ac.id</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>(0271)648939</p>
                    </div>
                </div>

            </div>

            <div class="shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.145163942227!2d110.7716294145064!3d-7.559146776742351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a144574ac83b7%3A0x3d83bc66d23487d3!2sPTIK%20UNS%20Pabelan!5e0!3m2!1sen!2sid!4v1618418131641!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>