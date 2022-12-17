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
<<<<<<< HEAD

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(<?= base_url('assets/Green/'); ?>assets/img/slide/bencana1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><?= $recent[0]['name']; ?>, <?= $recent[0]['reg']; ?></h2>
                        <p class="animate__animated animate__fadeInUp">Tanggal: <?= $recent[0]['date']; ?>, Korban: <?= $recent[0]['casualty']; ?></p>
                        <a href="<?= base_url('Disaster'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(<?= base_url('assets/Green/'); ?>assets/img/slide/bencana2.png)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><?= $recent[1]['name']; ?>, <?= $recent[1]['reg']; ?></h2>
                        <p class="animate__animated animate__fadeInUp">Tanggal: <?= $recent[1]['date']; ?>, Korban: <?= $recent[1]['casualty']; ?></p>
                        <a href="<?= base_url('viewer'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(<?= base_url('assets/Green/'); ?>assets/img/slide/bencana3.jpeg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><?= $recent[2]['name']; ?>, <?= $recent[2]['reg']; ?></h2>
                        <p class="animate__animated animate__fadeInUp">Tanggal: <?= $recent[2]['date']; ?>, Korban: <?= $recent[2]['casualty']; ?></p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit</a>
                    </div>
                </div>
            </div>

=======
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <!-- Slide 1 -->
                <div class="carousel-item <?php if ($i == 0) {
                                                echo "active";
                                            } ?>" style="background-image: url(<?= base_url('assets/Green/'); ?>assets/img/slide/bencana<?= ($i + 1); ?>.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><?= $recent[$i]['name']; ?>, <?= $recent[$i]['reg']; ?></h2>
                            <p class="animate__animated animate__fadeInUp">Tanggal: <?= $recent[$i]['date']; ?>, Korban: <?= $recent[$i]['casualty']; ?></p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
>>>>>>> 2926747fb386b5cde46d148484010e88f08f34e5
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
                <h2>Bencana Sebelumnya</h2>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Provinsi
                    </button>
                    <ul class="dropdown-menu">
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

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Laporkan Korban Hilang</h3>
                    <p> Ayo bantu kami dalam melaporkan keberadaan korban yang hilang</p>
                </div>
                <div class="col-lg-2 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#contact">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Terhubunglah dengan kami</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
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

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d292.2526263295972!2d107.17739008244826!3d-6.2799448803760205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1671213783374!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->