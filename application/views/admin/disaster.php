<?php $this->view('template/navbar'); ?>
<?php $this->view('template/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Disaster</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                <li class="breadcrumb-item ">Admin</li>
                <li class="breadcrumb-item active">Disaster</li>
            </ol>
        </nav>
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addDisasterModal">Add</button>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->
<div class="modal fade" id="addDisasterModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="addForm" action="<?= base_url('admin/add'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Add Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12 mt-2">
                        <label class="form-label">Name</label>
                        <select class="form-select" name="selectDisaster" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <option value="Flood">Flood</option>
                            <option value="Earthquake">Earthquake</option>
                            <option value="Tornado">Tornado</option>
                            <option value="Landslide">Landslide</option>
                            <option value="Fire">Fire</option>
                            <option value="Volcano">Volcano</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Province</label>
                        <select class="form-select" name="selectProvince" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <?php foreach ($province as $p) : ?>
                                <option value="<?= $p['id_region']; ?>"><?= $p['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="date" value="" required>
                        <span id="date_error"></span>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Casualty</label>
                        <input type="text" name="casualty" class="form-control" id="casualty" value="" required>
                        <span id="casualty_error"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- End Basic Modal-->

<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="editForm" action="<?= base_url('user/editData'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label class="form-label">ID</label>
                        <input type="text" name="userId" class="form-control" id="userId" value="" required>
                        <span id="id_error"></span>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="" required>
                        <span id="name_error"></span>
                    </div>

                    <fieldset class="row mt-2">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                                <label class="form-check-label">
                                    Female
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-12 mt-2">
                        <label class="form-label">Role</label>
                        <input type="text" name="role" class="form-control" id="role" value="" required>
                        <span id="role_error"></span>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="date" value="" required>
                        <span id="date_error"></span>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" value="" required>
                        <span id="address_error"></span>
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Religion</label>
                        <select class="form-select" id="selectReligion" name="selectReligion" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="col-12 mt-2">
                        <label for="file" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" required>
                        <span id="photo_error"></span>
                    </div>

                    <fieldset class="row mt-2">
                        <legend class="col-form-label col-sm-2 pt-0">Married Status</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Single" checked>
                                <label class="form-check-label">
                                    Single
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Married">
                                <label class="form-check-label">
                                    Married
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-12 mt-2">
                        <label class="form-label">Contact</label>
                        <input type="text" name="contact" class="form-control" id="contact" value="" required>
                        <span id="contact_error"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="editButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- End Basic Modal-->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>