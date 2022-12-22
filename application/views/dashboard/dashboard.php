<?php $this->view('dashboard/info') ?>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <img src="<?= base_url('assets/Green'); ?>/assets/img/logo.png" width="70px" height="70px">
        <h1 class="logo me-auto"><a href="index.html">Stana Indonesia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#services">Bencana Sebelumnya</a></li>
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="<?= base_url('Auth'); ?>">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <!-- Slide 1 -->
                <div class="carousel-item <?php if ($i == 0) {
                                                echo "active";
                                            } ?>" style="background-image: url(<?= base_url('assets/Green/'); ?>assets/img/slide/bencana<?= ($i + 1); ?>.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><?= $recent[$i]['name']; ?>, <?= $recent[$i]['reg']; ?></h2>
                            <p class="animate__animated animate__fadeInUp">Date: <?= $recent[$i]['date']; ?>, Casualty: <?= $recent[$i]['casualty']; ?></p>
                            <a href="<?= base_url('dashboard/view/'); ?><?= $recent[$i]['id_disaster'] ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Previous Diaster</h2>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Province
                    </button>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow:auto;">
                        <?php foreach ($province as $p) : ?>
                            <li id="<?= $p['id_region']; ?>"><a class="dropdown-item"><?= $p['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center place">
            </div>

        </div>
    </section><!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Report Missing Person</h2>
                <p>Help Inddonesia find missing victims</p>
            </div>

            <div class="row">

                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Indonesia</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>stanaindonesia@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 813-5155-2541</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d248.61007579114835!2d107.17758524136853!3d-6.279853817659485!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1671541803347!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->