<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>


<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio uns-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <h3>Hasil Karya Mahasiswa PTIK</h3>
                <p>Berikut adalah portofolio dari mahasiswa Program Studi Pendidikan Teknik dan Informatika Universitas Sebelas Maret.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-card">Animasi 2D/3D</li>
                        <li data-filter=".filter-app">App/Web</li>
                        <li data-filter=".filter-web">Design/Video</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="/img/portfolio/app1.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sistem Informasi PIMUNS</h4>
                        <p>Arif Wiranata Patanduk</p>
                        <a href="/img/portfolio/app1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sistem Informasi PIMUNS"><i class="bx bx-plus"></i></a>
                        <a href="https://pkm.uns.ac.id/" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="/img/portfolio/design2.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Video Profil PTIK</h4>
                        <p>Firman Adiyuda, dkk</p>
                        <a href="/img/portfolio/design2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Video Profil PTIK"><i class="bx bx-plus"></i></a>
                        <a href="https://youtu.be/gBPvt_mCTAQ" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="/img/portfolio/animasi1.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Rise of The Giant Rock</h4>
                        <p>Arif Wiranata Patanduk</p>
                        <a href="/img/portfolio/animasi1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Rise of The Giant Rock"><i class="bx bx-plus"></i></a>
                        <a href="https://youtu.be/3NyTYlfit44" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="/img/portfolio/design1.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Infografik - Juara 3 JBC 2020</h4>
                        <p>Arif Wiranata Patanduk</p>
                        <a href="/img/portfolio/design1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Infografik - Juara 3 JBC 2020"><i class="bx bx-plus"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="/img/portfolio/animasi2.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Video Iklan Produk Bucatur</h4>
                        <p>Arif Wiranata Patanduk</p>
                        <a href="/img/portfolio/animasi2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Video Iklan Produk Bucatur"><i class="bx bx-plus"></i></a>
                        <a href="https://youtu.be/_OH_KjPuwaE" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="/img/portfolio/animasi3.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Stop Motion Fiersa Besari - Celengan Rindu</h4>
                        <p>Kirana Nanda, Royan Gagas, Juniar Aldi</p>
                        <a href="/img/portfolio/animasi3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Stop Motion Fiersa Besari - Celengan Rindu"><i class="bx bx-plus"></i></a>
                        <a href="https://youtu.be/k5CqMa3ndTw" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>