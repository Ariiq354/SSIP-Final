<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php if ($this->session->userdata('id_role') == 1) : ?>
            <li class="nav-heading">Administrator</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin'); ?>">
                    <i class="bi bi-list-ul"></i>
                    <span>User List</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('user'); ?>">
                    <i class="bi bi-person-check"></i>
                    <span>User Request</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('user'); ?>">
                    <i class="bi bi-exclamation-square"></i>
                    <span>Report</span>
                </a>
            </li><!-- End Dashboard Nav -->

        <?php endif; ?>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('user'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('user/profile'); ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->