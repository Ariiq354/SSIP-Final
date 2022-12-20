<?php $this->view('template/navbar'); ?>
<?php $this->view('template/sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
                <li class="breadcrumb-item ">Users</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach ($member as $m) :  ?>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Option</h6>
                                        </li>

                                        <li><a id="<?= $m['nik']; ?>" class="dropdown-item modalDetail" href="" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a></li>
                                        <li><a id="<?= $m['nik']; ?>" class="dropdown-item modalEdit" href="" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></li>
                                        <li><a id="<?= $m['nik']; ?>" class="dropdown-item modalDelete" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><?= $m['name']; ?> <span>| <?= $m['role']; ?></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets/userImage/' . $m['photo']); ?>" class="img-fluid rounded-start">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">Date of Birth: <?= $m['dob']; ?></div>
                                            <div class="card-text">Gender: <?= $m['gender']; ?></div>
                                            <div class="card-text">Religion: <?= $m['religion']; ?></div>
                                            <div class="card-text">ID: <?= $m['nik']; ?></div>
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
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="addForm" action="<?= base_url('user/add'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Add Form</h5>
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
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
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
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
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

<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('user/delete'); ?>" method="POST">
                <div class="modal-body">
                    <input class="userId" type="hidden" name="userId" value="">
                    Delete this member from your family?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- End Basic Modal-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>