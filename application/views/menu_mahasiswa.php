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
                            <a href="<?= base_url('mahasiswa/dashboard') ?>" class="nav-link <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <?= $mahasiswa_menu ?>
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
</body>

</html>