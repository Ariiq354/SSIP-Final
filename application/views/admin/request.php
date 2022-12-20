<?php $this->view('template/navbar'); ?>
<?php $this->view('template/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Request</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                <li class="breadcrumb-item ">Admin</li>
                <li class="breadcrumb-item active">Request</li>
            </ol>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach ($request as $r) :  ?>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Option</h6>
                                        </li>

                                        <li><a id="<?= $r['id_family']; ?>" class="dropdown-item photo" href="" data-bs-toggle="modal" data-bs-target="#photoModal">Photo</a></li>
                                        <li><a id="<?= $r['id_family']; ?>" class="dropdown-item approve" href="">Approve</a></li>
                                        <li><a id="<?= $r['id_family']; ?>" class="dropdown-item reject" href="">Reject</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><?= $r['head_family']; ?> <span>| <?= $r['reg']; ?></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/image/' . $r['picture']); ?>" class="img-fluid rounded-start">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">Family ID: <?= $r['id_family']; ?></div>
                                            <div class="card-text">Region: <?= $r['reg']; ?></div>
                                            <div class="card-text">Head Family: <?= $r['head_family']; ?></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->
<div class="modal fade modal-xl" id="photoModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body photo">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- End Basic Modal-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>