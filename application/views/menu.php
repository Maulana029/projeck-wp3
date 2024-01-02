<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/DataTables/buttons.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/DataTables/dataTables.bootstrap4.min.css') ?>">
    <link rel="favicon icon" href="<?= base_url('dist/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
    <title><?= $judul ?></title>
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <!-- <script src="<?= base_url('dist/js/adminlte.js') ?>"></script> -->
    <script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/sweetalert.min.js') ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('dist/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/DataTables-1.13.1/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/Buttons-2.3.3/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/Buttons-2.3.3/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/JSZIP-2.5.0/jszip.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/pdfmake-0.1.36/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/pdfmake-0.1.36/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/Buttons-2.3.3/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/Buttons-2.3.3/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('dist/DataTables/Buttons-2.3.3/js/buttons.colVis.min.js') ?>"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img src="<?= base_url('dist/img/logo-bsi-2.png') ?>" alt="AdminLTELogo" class="animation__wobble" height="60" width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-info">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-widget="pushmenu" role="button">
                        <i class="fas fa-bars bg-info"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <?php foreach($profil as $data){?>
                        Tahun Pelajaran <?= $data->tahun_pelajaran?> / Semester <?= $data->semester?>
                        <?php }?>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <i class="far fa-calendar-alt"></i>
                        <script>
                            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                            var myDays = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay();
                            thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <p>/</p>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <p id="clock"></p>
                        <script>
                            setInterval(customClock, 500);

                            function customClock() {
                                var time = new Date();
                                var hrs = time.getHours();
                                var min = time.getMinutes();
                                var sec = time.getSeconds();
                                document.getElementById('clock').innerHTML = hrs + " : " + min + " : " + sec;
                            }
                        </script>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="nav-link">
                        <a href="<?= site_url('home/logout') ?>" class="text-white text-bold">
                            <i class="fa fa-sign-out-alt"></i>
                            Keluar
                        </a>
                    </div>
                </div>
                <!-- <li class="dropdown user user-menu text-bold nav-link">
                    <a href="#" class="dropdown-toggle text-light" data-toggle="dropdown">
                        <i class="fas fa-user"></i>
                        <span class="hidden-xs">Administrator</span>
                    </a>
                    <ul class="dropdown-menu mt-2 bg-info">
                        <li class="user-header">
                            <img src="<?= site_url('dist/img/default.jpg'); ?>" alt="User Image" class="img-circle">
                            <p>
                                Administrator
                                <small>admin</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= site_url('profil'); ?>" class="btn btn-default btn-flat float-left">
                                    <i class="fas fa-user-cog"></i>
                                    Profil
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= site_url('home/logout') ?>" class="btn btn-default btn-flat float-right">
                                    <i class="fa fa-sign-out-alt"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-info elevation-2">
            <a href="#" class="brand-link bg-info">
            <img src="<?= base_url('dist/img/icon.png') ?>" alt="AdminLTELogo" class="brand-image elevation-0" style="opacity: .8" height="50" width="50">
            <?php foreach($profil as $data){?>
                <span class="brand-text font-weight-bold"><?= $data->nama_lembaga?></span>
                <?php }?>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(1) == 'master' ? 'menu-open' : '' ?>">
                            <a href="" class="nav-link <?= $this->uri->segment(1) == 'master' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('master/dosen') ?>" class="nav-link <?= $this->uri->segment(2) == 'dosen' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Dosen</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('master/fakultas') ?>" class="nav-link <?= $this->uri->segment(2) == 'fakultas' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Fakultas & Prodi</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('master/tingkat') ?>" class="nav-link <?= $this->uri->segment(2) == 'tingkat' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Tingkat</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('master/mahasiswa') ?>" class="nav-link <?= $this->uri->segment(2) == 'mahasiswa' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Mahasiswa</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('master/mata_kuliah') ?>" class="nav-link <?= $this->uri->segment(2) == 'mata_kuliah' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Data Mata Kuliah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?= $this->uri->segment(1) == 'pengaturan' ? 'menu-open' : '' ?>">
                            <a href="" class="nav-link <?= $this->uri->segment(1) == 'pengaturan' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    Pengaturan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('pengaturan/profil') ?>" class="nav-link <?= $this->uri->segment(2) == 'profil' ? 'active' : '' ?>">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Profil</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <?= $ujian ?>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy;
                <script>
                    var creditsyear = new Date();
                    document.write(creditsyear.getFullYear());
                </script>
                <a href="#">Desa Programmer</a>
            </strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.3.0 | Halaman dimuat dalam <strong>{elapsed_time}</strong> detik
            </div>
        </footer>
    </div>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>
    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({
                buttons: ['copy', 'excel', 'csv', 'pdf', 'print'],
                lengthMenu: [
                    [5, 10, 20, 50, 100, -1],
                    ['5 Rows', ' 10 Rows', '20 Rows', '50 Rows', '100 Rows', 'Show All']
                ]
            });
            table.buttons().container()
                .appendTo('#table_wrapper .col-md-6:eq(0)');
        });
        $(document).ready(function() {
            var table = $('#proyek').DataTable({
                lengthMenu: [
                    [5, 10, 20, 50, 100, -1],
                    ['5 Rows', ' 10 Rows', '20 Rows', '50 Rows', '100 Rows', 'Show All']
                ]
            });
            table.buttons().container()
                .appendTo('#table_wrapper .col-md-6:eq(0)');
        });
        $(document).ready(function() {
            var table = $('#prodi').DataTable({
                lengthMenu: [
                    [5, 10, 20, 50, 100, -1],
                    ['5 Rows', ' 10 Rows', '20 Rows', '50 Rows', '100 Rows', 'Show All']
                ]
            });
            table.buttons().container()
                .appendTo('#table_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $('#tambah_dosen_pengajar').select2({
            placeholder: '-- Pilih Dosen Pengajar --',
            theme: 'bootstrap4',
            allowClear: true
        });
        $('#semester').select2({
            placeholder: '-- Pilih Tingkat Semester --',
            theme: 'bootstrap4',
            allowCenter: true
        });
        $('#program_studi').select2({
            placeholder: '-- Pilih Program Studi --',
            theme: 'bootstrap4',
            allowCenter: true
        });
        $('#pilih_fakultas').select2({
            placeholder: '-- Pilih Program Studi --',
            theme: 'bootstrap4',
            allowCenter: true
        });
    </script>
</body>

</html>