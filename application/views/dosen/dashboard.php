<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 pb-2">
                <h1 class="font-weight-normal">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                </ol>
            </div>
            <div class="col-lg-12">
                <div class="jumbotron m-0">
                    <h1 class="font-weight-normal m-0 pt-0" style="font-size: 35px">Hai, Selamat Datang <?php echo $this->session->userdata('nama_dosen'); ?></h1>
                    <h3 class="font-weight-normal m-0 pt-0">Jabatan: <?php echo $this->session->userdata('jabatan_dosen'); ?></h3>
                </div>
            </div>
            <div class="col-lg-6 pt-4">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h4 class="card-title text-bold"><i class="fas fa-bullhorn"></i> Pengumuman Dosen</h4>
                    </div>
                    <div class="card-body">
                        <div class="card bg-light">
                            <?php foreach ($pengumuman_dosen as $data_info) { ?>
                                <p class="p-2 m-0"><?= $data_info->pengumuman_dosen ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pt-4">
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="card-title text-bold"><i class="fas fa-user-graduate"></i> Identitas Dosen</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="col-sm-4">Nama Mahasiswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm mb-2" disabled value="<?= $this->session->userdata('nama_dosen') ?>">
                            </div>
                            <label class="col-sm-4">NIP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm mb-2" disabled value="<?= $this->session->userdata('nip') ?>">
                            </div>
                            <label class="col-sm-4">NIDN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm mb-2" disabled value="<?= $this->session->userdata('nidn') ?>">
                            </div>
                            <label class="col-sm-4">Jabatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm mb-2" disabled value="<?= $this->session->userdata('jabatan_dosen') ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>