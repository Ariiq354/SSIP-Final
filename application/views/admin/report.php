<?php $this->view('template/navbar'); ?>
<?php $this->view('template/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                <li class="breadcrumb-item ">Admin</li>
                <li class="breadcrumb-item active">Report</li>
            </ol>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach ($report as $r) :  ?>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Option</h6>
                                        </li>

                                        <li><a id="<?= $r['id_report']; ?>" class="dropdown-item photoReport" href="" data-bs-toggle="modal" data-bs-target="#photoReportModal">Photo</a></li>
                                        <li><a id="<?= $r['id_report']; ?>" class="dropdown-item deleteReport" href="">Delete</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><?= $r['subject']; ?> <span>| <?= $r['dis']; ?></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/reportimage/' . $r['photo']); ?>" class="img-fluid rounded-start">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">ID: <?= $r['nik']; ?></div>
                                            <div class="card-text">Description: <?= $r['description']; ?></div>
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
<div class="modal fade modal-xl" id="photoReportModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body photoData">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- End Basic Modal-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>