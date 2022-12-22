<header id="header" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center">

        <img src="<?= base_url('assets/Green'); ?>/assets/img/logo.png" width="70px" height="70px">
        <h2 class="logo me-auto" style="font-size: 28px;"><a href="<?= base_url('Dashboard') ?>">Stana Indonesia</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#statistics">Disaster Statistics</a></li>
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <li><a class="nav-link scrollto" href="#list">Victim Lists</a></li>
                <li><a class="getstarted scrollto" href="<?= base_url('Auth'); ?>">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<main id="main" class="main col-lg-11">

    <div class="justify-content-center">
        <h1><?= $disaster['disasname'] ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $disaster['reg'] ?></li>
                <li class="breadcrumb-item"><?= $disaster['date'] ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6" id="statistics">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Survivor</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $hidup['count'] ?></h6>
                                        <p>Survivor:
                                            <?php
                                            if ($hilang['count'] + $hidup['count'] + $meninggal['count'] != 0) {
                                                echo (int)(($hidup['count'] / ($hilang['count'] + $hidup['count'] + $meninggal['count'])) * 100);
                                            } else {
                                                echo 0;
                                            }
                                            ?>%</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Missing</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $hilang['count'] ?></h6>
                                        <p>Missing:
                                            <?php
                                            if ($hilang['count'] + $hidup['count'] + $meninggal['count'] != 0) {
                                                echo (int)(($hilang['count'] / ($hilang['count'] + $hidup['count'] + $meninggal['count'])) * 100);
                                            } else {
                                                echo 0;
                                            }
                                            ?>%</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Dead</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-dash"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6> <?= $meninggal['count'] ?></h6>
                                        <p>Dead:
                                            <?php
                                            if ($hilang['count'] + $hidup['count'] + $meninggal['count'] != 0) {
                                                echo (int)(($meninggal['count'] / ($hilang['count'] + $hidup['count'] + $meninggal['count'])) * 100);
                                            } else {
                                                echo 0;
                                            }
                                            ?>%</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">REPORT</h5>

                                <!-- Website Traffic -->
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Statistic</h5>

                                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                                    tooltip: {
                                                        trigger: 'item'
                                                    },
                                                    legend: {
                                                        top: '5%',
                                                        left: 'center'
                                                    },
                                                    series: [{
                                                        name: 'Access From',
                                                        type: 'pie',
                                                        radius: ['40%', '70%'],
                                                        avoidLabelOverlap: false,
                                                        label: {
                                                            show: false,
                                                            position: 'center'
                                                        },
                                                        emphasis: {
                                                            label: {
                                                                show: true,
                                                                fontSize: '18',
                                                                fontWeight: 'bold'
                                                            }
                                                        },
                                                        labelLine: {
                                                            show: false
                                                        },
                                                        data: [{

                                                                value: <?= $hilang['count'] ?>,
                                                                name: 'Hilang'

                                                            },
                                                            {
                                                                value: <?= $hidup['count'] ?>,
                                                                name: 'Selamat'
                                                            },

                                                            {

                                                                value: <?= $meninggal['count'] ?>,
                                                                name: 'Meninggal'
                                                            }

                                                        ]
                                                    }]
                                                });
                                            });
                                        </script>
                                    </div>
                                </div><!-- End Website Traffic -->

                                <div class="card">
                                    <div class="card-body pb-4">
                                        <h5 class="card-title" id="list">Victim List</h5>
                                        <table class="table table-striped table-bordered" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">Kelamin</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($victim as $i => $v) :
                                                    if ($v['status'] == 0) {
                                                        $status = 'Alive';
                                                    } else if ($v['status'] == 1) {
                                                        $status = 'Missing';
                                                    }
                                                    if ($v['status'] == 2) {
                                                        $status = 'Dead';
                                                    }
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= ($i + 1) ?></th>
                                                        <td> <?= $v['name'] ?></td>
                                                        <td> <?= $v['nik']  ?> </td>
                                                        <td> <?= $v['gender'] ?> </td>
                                                        <td> <?= $status ?> </td>
                                                        <td width="23%">
                                                            <button id="<?= $v['nik']; ?>" class='btn btn-primary btn-sm distDetail' id="button" data-bs-toggle='modal' data-bs-target='#detailModal'><i class="bi bi-info-circle"></i> Detail</button>
                                                            <button id="<?= $v['nik']; ?>" class='btn btn-danger btn-sm distReport' id="button" data-bs-toggle='modal' data-bs-target='#reportModal'><i class=' bi bi-exclamation-circle'></i> Report</button>
                                                        </td>
                                                    <?php
                                                endforeach; ?>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Reports -->
                    </div>
                </div><!-- End Left side columns -->

            </div>
    </section>

    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modalData">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- End Basic Modal-->

    <div class="modal fade" id="reportModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="reportForm" action="<?= base_url('dashboard/report'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Report Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 mt-2">
                            <div>
                                <div id="name"></div>
                                <div id="nik"></div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control id_disaster" name="id_disaster" value="" hidden>

                                <input type="text" class="form-control nik" name="nik" value="" hidden>
                                <input type="text" class="form-control name" name="name" value="" hidden>
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="name">Photo</label>
                                <input type="file" class="form-control" name="reportphoto" id="subject" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="name">Message Report</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div><!-- End Basic Modal-->

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>