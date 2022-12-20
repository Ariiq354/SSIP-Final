<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center w-auto">
                                <img src="<?= base_url('assets/Green/'); ?>assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Stana Indonesia</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>
                                <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/register'); ?>" enctype="multipart/form-data" novalidate>
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Family ID</label>
                                        <input type="text" name="familyId" class="form-control" id="familyId" value="<?= set_value('familyId'); ?>" required>
                                        <div class="invalid-feedback">Please, enter your family id!</div>
                                        <?= form_error('familyId', '<div class="invalid">', '</div>') ?>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Provinsi</label>
                                        <select class="form-select" name="selectProvince" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                            <?php foreach ($province as $p) : ?>
                                                <option value="<?= $p['id_region']; ?>" <?php if ($p['id_region'] == set_value('selectProvince')) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $p['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username'); ?>" required>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                            <?= form_error('username', '<div class="invalid">', '</div>') ?>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="file" class="form-label">Family Identity Card</label>
                                        <input type="file" name="picture" class="form-control" id="picture" required>
                                        <div class="invalid-feedback">Please upload your family identity card!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="<?= base_url('auth'); ?>">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>