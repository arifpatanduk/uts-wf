<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>


<main id="main">

    <section class="uns-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>PTIK Juara</h2>

                <h3>Prestasi Mahasiswa PTIK </h3>
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

            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#prestasi4">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/prestasi/ptik.jpg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">4 Mahasiswa PTIK UNS Mendapatkan Bronze Medal dan Special Award dari King Abdulaziz University</h5>
                            <p class="card-text">Dengan membawa produk inovasi teknologi asistif ke Korea Selatan yang bernama SO-LI Sense : 3D Mapping and Artificial Intelligence Combination Assistive Technology for Blind People</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class='bx bx-calendar'></i>
                                    9 December 2019
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#prestasi5">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="/img/prestasi/futsal.jpeg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">HMP PTIK juara Lomba Futsal</h5>
                            <p class="card-text">Surakarta, Minggu 22 Oktober 2019. Tim futsal Menara FC dari Program Studi PTIK Universitas Sebelas Maret Surakarta berhasil menjadi juara 2 dalam lomba futsal yang diselenggarakan oleh Himpunan Mahasiswa PPkn Demokratia dengan total hadiah mencapai Rp. 1.500.000,00- .</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class='bx bx-calendar'></i>
                                    23 Oktober 2019
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('kemahasiswaan/modal-prestasi'); ?>
    </section>



</main><!-- End #main -->

<?= $this->endSection(); ?>