<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="font-weight-normal">Profil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-tools"></i> Pengaturan</li>
                    <li class="breadcrumb-item active"> Profil</li>
                </ol>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-3">
                <div class="card card-info card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img src="<?= base_url('dist/img/default.jpg') ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle">
                        </div>
                        <?php foreach($user as $admin){?>
                        <h3 class="profile-username text-center"><?= $admin->nama?></h3>
                        <p class="text-muted text-center"><?= $admin->username?></p>
                        <?php }?>
                        <ul class="list-group list-group-unbordered mb-2 text-center">
                            <?php foreach($profil as $data){?>
                            <li class="list-group-item">
                                <b>Nama Lembaga</b><br>
                                <b><?= $data->nama_lembaga?></b>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat Lembaga</b><br>
                                <b><?= $data->alamat_lembaga?></b>
                            </li>
                            <li class="list-group-item">
                                <b>No. Telepon</b><br>
                                <b><?= $data->nomor_telepon?></b>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="#profil" data-toggle="tab" class="nav-link active">Profil</a></li>
                            <li class="nav-item"><a href="#data" data-toggle="tab" class="nav-link">Data</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profil">
                                <form action="<?= base_url('pengaturan/upd_profil')?>" method="post">
                                    <div class="row">
                                        <?php foreach($profil as $data){?>
                                        <input type="hidden" name="id_profil" value="<?= $data->id_profil?>">
                                        <?php }?>
                                        <div class="col-sm-6">
                                            <label for="nama_lembaga">Nama Lembaga / Perusahaan</label>
                                            <input type="text" name="nama_lembaga" id="nama_lembaga" class="form-control form-control-sm mb-2" required>
                                            <label for="nomor_telepon">Nomor Telepon</label>
                                            <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control form-control-sm mb-2" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="alamat_lembaga">Alamat Lembaga / Perusahaan</label>
                                            <input type="text" name="alamat_lembaga" id="alamat_lembaga" class="form-control form-control-sm mb-2" required>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                <label for="tahun_pelajaran">Tahun Pelajaran</label>
                                                    <input type="text" name="tahun_pelajaran" id="tahun_pelajaran" class="form-control form-control-sm mb-2" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="semester">Semester</label>
                                                    <select name="semester" id="semester" class="form-control form-control-sm mb-2" required>
                                                        <option value="">-- Pilih Semester --</option>
                                                        <option value="Ganjil">Ganjil</option>
                                                        <option value="Genap">Genap</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mt-2">
                                            <button class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="data">
                                <form action="<?= base_url('pengaturan/del_data')?>" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr style="margin-top: 0px; margin-bottom:4px;">
                                            <p class="text-center mb-2 text-bold">Data Master</p>
                                            <hr style="margin-top: 0px; margin-bottom:8px;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_dosen" class="form-check-input" value="tbl_dosen">
                                                            <label for="data_dosen" class="form-check-label">Data Dosen</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_fakultas" class="form-check-input" value="tbl_fakultas">
                                                            <label for="data_fakultas" class="form-check-label">Data Fakultas</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_prodi" class="form-check-input" value="tbl_prodi">
                                                            <label for="data_prodi" class="form-check-label">Data Program Studi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_tingkat" class="form-check-input" value="tbl_tingkat">
                                                            <label for="data_tingkat" class="form-check-label">Data Tingkat</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_mahasiswa" class="form-check-input" value="tbl_mahasiswa">
                                                            <label for="data_mahasiswa" class="form-check-label">Data Mahasiswa</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" name="hapus[]" id="data_mata_kuliah" class="form-check-input" value="tbl_mata_kuliah">
                                                            <label for="data_mata_kuliah" class="form-check-label">Data Mata Kuliah</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>