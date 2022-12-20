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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDisasterModal">Add</button>

    </div><!-- End Page Title -->


    <div class="card pb-4 pt-4 pr-4 pl-4">
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Region</th>
                    <th scope="col">Date</th>
                    <th scope="col">Casualty</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disaster as $i => $d) : ?>
                    <tr>
                        <th scope="row"><?= ($i + 1) ?></th>
                        <td> <?= $d['disasname'] ?></td>
                        <td> <?= $d['reg']  ?> </td>
                        <td> <?= $d['date'] ?> </td>
                        <td><?= $d['casualty']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</main><!-- End #main -->
<div class="modal fade" id="addDisasterModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="addDisasterForm" action="<?= base_url('admin/addDisaster'); ?>" method="POST">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- End Basic Modal-->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>