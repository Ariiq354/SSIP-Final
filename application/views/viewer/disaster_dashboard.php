<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" <?= base_url('assets/NiceAdmin'); ?> /assets/img/favicon.png" rel="icon">
    <link href=" <?= base_url('assets/NiceAdmin'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/NiceAdmin'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/Green'); ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
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
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Korban Selamat</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?= $hidup['count'] ?></h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Korban Menghilang</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-exclamation-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?= $hilang['count'] ?></h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Korban Meninggal</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-dash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> <?= $meninggal['count'] ?></h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">


                                <div class="card-body">
                                    <h5 class="card-title">LAPORAN DATA KORBAN</h5>

                                    <!-- Website Traffic -->
                                    <div class="card">

                                        <div class="card-body pb-0">
                                            <h5 class="card-title">Statistik Korban</h5>

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


                                </div>
                            </div><!-- End Reports -->

                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">

                                    <div class="card-body">
                                        <h5 class="card-title">DATA KORBAN</h5>

                                        <table class="table table-borderless DataTable" id="example">
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
                                                $i = 1;

                                                foreach ($victim as $v) :
                                                    if ($v['status'] == 0) {
                                                        $haha = 'Hidup';
                                                    } else if ($v['status'] == 1) {
                                                        $haha = 'Hilang';
                                                    }
                                                    if ($v['status'] == 2) {
                                                        $haha = 'Meninggal';
                                                    }

                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= $i ?></th>
                                                        <td> <?= $v['name'] ?></td>
                                                        <td> <?= $v['nik']  ?> </td>
                                                        <td> <?= $v['gender'] ?> </td>
                                                        <td> <?= $haha ?> </td>
                                                        <td> <button class='btn btn-primary' id="button" data-bs-toggle='modal' data-bs-target='#exampleModal<?= $v['nik'] ?>'><i class='bi bi-exclamation-square'></i> Detail</button></td>
                                                    <?php
                                                    $i++;
                                                endforeach; ?>
                                                    </tr>
                                            </tbody>

                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Recent Sales -->

                        </div>
                    </div><!-- End Left side columns -->

                </div>
        </section>
        <!-- Modal -->
        <?php $no = 0 ?>
        <?php foreach ($victim as $vict) :  ?>
            <div class="modal fade" id="exampleModal<?= $vict['nik'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?= $vict['name'] ?> Detail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="col-md-8">
                                <?= $vict['name'] ?> photo
                                <br>
                                <br>
                            </div>
                            <div>
                                <p>Name&#9; : <?= $vict['name'] ?></p>
                                <p>NIK&#9; : <?= $vict['nik'] ?></p>
                                <p>Date of Birth&#9; : <?= $vict['dob'] ?></p>
                                <p>Gender&#9; : <?= $vict['gender'] ?></p>
                                <p>Religion&#9; : <?= $vict['religion'] ?></p>
                                <p>Married Status&#9; : <?= $vict['married_status'] ?></p>
                                <p>Contact&#9; : <?= $vict['contact'] ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#example').DataTable();
        });
    </script>


    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/js/main.js"></script>

</body>

</html>