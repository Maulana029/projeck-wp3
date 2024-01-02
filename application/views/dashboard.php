<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="font-weight-normal">Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= $mahasiswa ?></h3>
                                <h5 class="font-weight-normal">Jumlah Mahasiswa/i</h5>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= $L ?></h3>
                                <h5 class="font-weight-normal">Jumlah Mahasiswa</h5>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?= $P ?></h3>
                                <h5 class="font-weight-normal">Jumlah Mahasiswi</h5>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= $dosen ?></h3>
                                <h5 class="font-weight-normal">Jumlah Dosen</h5>
                            </div>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?= $prodi ?></h3>
                                <h5 class="font-weight-normal">Jumlah Pogram Studi</h5>
                            </div>
                            <div class="icon">
                                <i class="fa fa-tools"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3><?= $matkul ?></h3>
                                <h5 class="font-weight-normal">Jumlah Mata Kuliah</h5>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h4 class="card-title text-bold"><i class="fas fa-bullhorn"></i> Pengumuman Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="card bg-light">
                                    <?php foreach ($pengumuman as $data_info) { ?>
                                        <p class="p-2 m-0"><?= $data_info->pengumuman ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" data-toggle="modal" data-target="#pengumuman" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h4 class="card-title text-bold"><i class="fas fa-bullhorn"></i> Pengumuman Dosen</h4>
                            </div>
                            <div class="card-body">
                                <div class="card bg-light">
                                    <?php foreach ($pengumuman_dosen as $data_info) { ?>
                                        <p class="p-2 m-0"><?= $data_info->pengumuman_dosen?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" data-toggle="modal" data-target="#pengumuman_dosen" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <form action="<?= base_url('dashboard/del_all_log') ?>" method="post">
                    <div class="card direct-chat direct-chat-warning">
                        <div class="card-header bg-info">
                            <h4 class="card-title"><i class="far fa-clock"></i> Log Aktivitas Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="direct-chat-messages">
                                <div class="direct-chat-msg">
                                    <?php $isLogin = true; // Untuk menandai apakah pesan berikutnya adalah login atau logout 
                                    ?>
                                    <?php foreach ($log_aktivitas_login as $data_login) : ?>
                                        <?php if ($data_login->tipe_aktivitas === 'login') : ?>
                                            <div class="direct-chat-msg <?php echo $isLogin ? '' : 'right'; ?>">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-<?php echo $isLogin ? 'left' : 'right'; ?>"><?= $data_login->nama_user ?></span>
                                                    <span class="direct-chat-timestamp float-<?php echo $isLogin ? 'right' : 'left'; ?>"><?= $data_login->waktu_aktivitas ?></span>
                                                </div>
                                                <img src="<?= base_url('dist/img/default.jpg') ?>" alt="gambar pengguna pesan" class="direct-chat-img">
                                                <div class="direct-chat-text">
                                                    <?= $data_login->tipe_aktivitas ?>
                                                </div>
                                            </div>
                                            <?php $isLogin = !$isLogin; // Toggle nilai untuk selang seling 
                                            ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class="direct-chat-msg">
                                    <?php $isLogout = true; // Untuk menandai apakah pesan berikutnya adalah login atau logout 
                                    ?>
                                    <?php foreach ($log_aktivitas_logout as $data_logout) : ?>
                                        <?php if ($data_logout->tipe_aktivitas === 'logout') : ?>
                                            <div class="direct-chat-msg <?php echo $isLogout ? '' : 'left'; ?>">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-<?php echo $isLogout ? 'right' : 'left'; ?>"><?= $data_logout->nama_user ?></span>
                                                    <span class="direct-chat-timestamp float-<?php echo $isLogout ? 'left' : 'right'; ?>"><?= $data_logout->waktu_aktivitas ?></span>
                                                </div>
                                                <img class="direct-chat-img" src="<?= base_url('dist/img/default.jpg') ?>" alt="gambar pengguna pesan">
                                                <div class="direct-chat-text">
                                                    <?= $data_logout->tipe_aktivitas ?>
                                                </div>
                                            </div>
                                            <?php $isLogout = !$isLogout; // Toggle nilai untuk selang seling 
                                            ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i> Hapus Log Aktivitas
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pengumuman">
    <form action="<?= base_url('dashboard/upd_pengumuman') ?>" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Pengumuman Mahasiswa</h4>
                    <button class="close text-light text-bold" arial-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mt-0">
                        <?php foreach ($pengumuman as $input_info) { ?>
                            <input type="hidden" name="id_pengumuman" value="<?= $input_info->id_pengumuman ?>">
                        <?php } ?>
                        <label>Ketik Pengumuman</label>
                        <textarea name="pengumuman" id="pengumuman" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="pengumuman_dosen">
    <form action="<?= base_url('dashboard/upd_pengumuman_dosen') ?>" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Pengumuman Dosen</h4>
                    <button class="close text-light text-bold" arial-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mt-0">
                        <?php foreach ($pengumuman as $input_info) { ?>
                            <input type="hidden" name="id_pengumuman_dosen" value="<?= $input_info->id_pengumuman ?>">
                        <?php } ?>
                        <label>Ketik Pengumuman</label>
                        <textarea name="pengumuman_dosen" id="pengumuman_dosen" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>