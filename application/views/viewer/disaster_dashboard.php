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
            <h1>Bencana 1</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Tempat</li>
                    <li class="breadcrumb-item">Tanggal</li>
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
                                            <h6>7812</h6>
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
                                            <h6>3264</h6>
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
                                            <h6>1244</h6>
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

                                                                    value: 3264,
                                                                    name: 'Hilang'

                                                                },
                                                                {
                                                                    value: 7812,
                                                                    name: 'Selamat'
                                                                },

                                                                {

                                                                    value: 1244,
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

                                        <table class="table table-borderless datatable">
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
                                            <?php 
                                            $i=1;
                                            foreach ($victim as $v):
                                                echo "<td>" . $i . "</td>";
                                                echo "<td>" . $v['name'] . "</td>";
                                                echo "<td>" . $v['nik'] . "</td>";
                                                echo "<td>" . $v['gender'] . "</td>";
                                                echo "<td>" . $v['status'] . "</td>";
                                                echo "<td>"  . "<a class='btn btn-primary' href='#modal'><i class='bi bi-exclamation-square'></i> \t Detail</a>". "</td>";
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><a href="#"><?php ?></a></th>
                                                </tr>
                                            </tbody>
                                            <?php
                                        $i++;
                                        endforeach; ?>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Recent Sales -->

                        </div>
                    </div><!-- End Left side columns -->

                </div>
        </section>

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
    <script src="<?= base_url('assets/NiceAdmin'); ?>/assets/js/main.js"></script>

</body>

</html>