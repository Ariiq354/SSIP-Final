<?php $this->view('template/navbar'); ?>
<?php $this->view('template/sidebar'); ?>

<main id="main" class="main">
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ready to leave?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to logout.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div><!-- End Basic Modal-->
    <div class="pagetitle">
        <h1>User List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">User List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card pb-4 pt-4 pr-4 pl-4">
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Family ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userAll as $i => $u) : ?>
                    <tr>
                        <th scope="row"><?= ($i + 1) ?></th>
                        <td> <?= $u['nik'] ?></td>
                        <td> <?= $u['id_family'] ?></td>
                        <td> <?= $u['name'] ?></td>
                        <td> <?= $u['gender']  ?> </td>
                        <td> <?= $u['dob'] ?> </td>
                        <td><?= $u['contact']; ?></td>
                        <td><select class="form-select status">
                                <option id="<?= $u['nik']; ?>" value="0" <?= ($u['status'] == 0) ? 'selected' : ''; ?>>Alive</option>
                                <option id="<?= $u['nik']; ?>" value="1" <?= ($u['status'] == 1) ? 'selected' : ''; ?>>Missing</option>
                                <option id="<?= $u['nik']; ?>" value="2" <?= ($u['status'] == 2) ? 'selected' : ''; ?>>Dead</option>
                            </select></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>