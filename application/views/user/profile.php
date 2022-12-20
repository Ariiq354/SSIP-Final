<?php $this->view('template/navbar') ?>
<?php $this->view('template/sidebar') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?= base_url('assets/profileImage/' . $user['profile']); ?>" alt="Profile" class="rounded-circle">
                        <h2><?= $user['head_family']; ?></h2>
                        <h3>Family ID: <?= $user['id_family']; ?></h3>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link <?php if (!isset($edit) && !isset($change)) {
                                                            echo 'active';
                                                        }; ?>" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link <?php if (isset($edit)) {
                                                            echo $edit;
                                                        }; ?>" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link <?php if (isset($change)) {
                                                            echo $change;
                                                        }; ?>" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade <?php if (!isset($edit) && !isset($change)) {
                                                            echo 'show active';
                                                        }; ?> profile-overview" id="profile-overview">
                                <h5 class="card-title">Family Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Head Family</div>
                                    <div class="col-lg-9 col-md-8"><?= $user['head_family']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Family ID</div>
                                    <div class="col-lg-9 col-md-8"><?= $user['id_family']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Region</div>
                                    <div class="col-lg-9 col-md-8"><?= $user['reg']; ?></div>
                                </div>

                            </div>

                            <div class="tab-pane fade <?php if (isset($edit)) {
                                                            echo 'show ' . $edit;
                                                        }; ?> profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="<?= base_url('user/edit'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="file" class="form-control" name="picture" />
                                        </div>
                                        <?= form_error('picture', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="headFamily" class="col-md-4 col-lg-3 col-form-label">Head Family</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" value="<?= $user['head_family']; ?>">
                                        </div>
                                        <?= form_error('username', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="id_family" class="col-md-4 col-lg-3 col-form-label">Family ID</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input disabled name="familyId" type="text" class="form-control" id="id_family" value="<?= $user['id_family']; ?>">
                                        </div>
                                        <?= form_error('familyId', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Region</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" name="selectProvince" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                                <?php foreach ($province as $p) : ?>
                                                    <option value="<?= $p['id_region']; ?>" <?php if ($p['id_region'] == $user['id']) {
                                                                                                echo 'selected';
                                                                                            } ?>><?= $p['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade <?php if (isset($change)) {
                                                            echo 'show ' . $change;
                                                        }; ?> pt-3" id="profile-change-password">
                                <!-- Change Password Form -->

                                <?= $this->session->flashdata('change'); ?>

                                <form action="<?= base_url('user/change'); ?>" method="POST">

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                        <?= form_error('password', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                        <?= form_error('newpassword', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Confirm New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                        </div>
                                        <?= form_error('renewpassword', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>