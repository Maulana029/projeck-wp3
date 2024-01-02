<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="font-weight-normal">Data Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-database"></i> Data Master</li>
                    <li class="breadcrumb-item active"> Data Mahasiswa</li>
                </ol>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header bg-info">
                <h4 class="card-title">Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm" id="table">
                    <thead>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th>Semester</th>
                            <th>Program Studi</th>
                            <th>Kode Kelas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($mahasiswa as $data){$no++;?>
                        <tr>
                            <td class="text-center"><?= $no;?></td>
                            <td><?= $data->nama_mahasiswa?></td>
                            <td><?= $data->nim?></td>
                            <td><?= $data->jenis_kelamin?></td>
                            <td><?= $data->semester?></td>
                            <td><?= $data->program_studi?></td>
                            <td><?= $data->kode_kelas?></td>
                            <td><?= $data->username_mahasiswa?></td>
                            <td><?= $data->password_mahasiswa?></td>
                            <td>
                                <button class="btn btn-xs btn-success" data-target="#upd_mahasiswa<?= $data->id_mahasiswa?>" data-toggle="modal" data-keyword="false" data-backdrop="static" onclick="edit_mahasiswa(<?= $data->id_mahasiswa?>)"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-xs btn-danger" data-target="#del_mahasiswa<?= $data->id_mahasiswa?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th>Semester</th>
                            <th>Program Studi</th>
                            <th>Kode Kelas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" data-target="#tambah_mahasiswa" data-toggle="modal" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href='<?= base_url('master/akses_mahasiswa')?>'"><i class="fas fa-key"></i> Refresh Akses</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah_mahasiswa">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_mahasiswa')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="nama_mahasiswa" class="col-sm-4">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="nim" class="col-sm-4">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" name="nim" id="nim" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="tempat_lahir" class="col-sm-4">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="tanggal_lahir" class="col-sm-4">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="jenis_kelamin" class="col-sm-4">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm mb-2" required="true">
                                <option value="">-- Pilih Jenis Kelamin--</option>
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <label for="semester" class="col-sm-4">Semester</label>
                        <div class="col-sm-8 mb-2">
                            <select type="text" name="semester" id="semester" class="form-control form-control-sm" required="true">
                                <option value=""></option>
                                <?php foreach($tingkat as $data_tingkat){?>
                                <option value="<?= $data_tingkat->tingkat?>"><?= $data_tingkat->tingkat?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label for="program_studi" class="col-sm-4">Program Studi</label>
                        <div class="col-sm-8 mb-2">
                            <select name="program_studi" id="program_studi" class="form-control form-control-sm" required="true">
                                <option value=""></option>
                                <?php foreach($prodi as $data_prodi){?>
                                <option value="<?= $data_prodi->program_studi?>"><?= $data_prodi->program_studi?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label for="kode_kelas" class="col-sm-4">Kode Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_kelas" id="kode_kelas" class="form-control form-control-sm mb-2" required="true">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php foreach($mahasiswa as $data){?>
<div class="modal fade" id="upd_mahasiswa<?= $data->id_mahasiswa?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_mahasiswa')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Data Mahasiswa</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_mahasiswa" value="<?= $data->id_mahasiswa?>">
                        <label for="nama_mahasiswa" class="col-sm-4">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nama_mahasiswa?>">
                        </div>
                        <label for="nim" class="col-sm-4">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" name="nim" id="nim" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nim?>">
                        </div>
                        <label for="tempat_lahir" class="col-sm-4">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm mb-2" required="true" value="<?= $data->tempat_lahir?>">
                        </div>
                        <label for="tanggal_lahir" class="col-sm-4">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm mb-2" required="true" value="<?= $data->tanggal_lahir?>">
                        </div>
                        <label for="jenis_kelamin" class="col-sm-4">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm mb-2" required="true" value="<?= $data->jenis_kelamin?>">
                                <?php 
                                    if($data->jenis_kelamin == 'Laki - laki')
                                    echo '<option value="Laki - laki" selected>Laki - laki</option>';
                                    else echo '<option value="Laki - laki">Laki - laki</option>';
                                    if($data->jenis_kelamin == 'Perempuan')
                                    echo '<option value="Perempuan" selected>Perempuan</option>';
                                    else echo '<option value="Perempuan">Perempuan</option>';
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-4">Semester</label>
                        <div class="col-sm-8 mb-2">
                            <select type="text" name="semester" id="pilih_semester<?= $data->id_mahasiswa?>" class="form-control form-control-sm mb-2" required="true" value="<?= $data->semester?>">
                                <option value=""></option>
                                <?php foreach($tingkat as $data_tingkat){?>
                                <option value="<?= $data_tingkat->tingkat?>"<?php if($data->semester == "$data_tingkat->tingkat"){echo 'selected';}?>><?= $data_tingkat->tingkat?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label class="col-sm-4">Program Studi</label>
                        <div class="col-sm-8 mb-2">
                            <select type="text" name="program_studi" id="pilih_program_studi<?= $data->id_mahasiswa?>" class="form-control form-control-sm mb-2" required="true" value="<?= $data->semester?>">
                                <option value=""></option>
                                <?php foreach($prodi as $data_prodi){?>
                                <option value="<?= $data_prodi->program_studi?>"<?php if($data->program_studi == "$data_prodi->program_studi"){echo "selected";}?>><?= $data_prodi->program_studi?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label for="kode_kelas" class="col-sm-4">Kode Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_kelas" id="kode_kelas" class="form-control form-control-sm mb-2" required="true" value="<?= $data->kode_kelas?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="del_mahasiswa<?= $data->id_mahasiswa?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_mahasiswa')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Data Mahasiswa</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_mahasiswa" value="<?= $data->id_mahasiswa?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Nama Mahasiswa: <?= $data->nama_mahasiswa .' / '. $data->nim .' / ' ?></p>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#pilih_semester<?= $data->id_mahasiswa?>').select2({
        placeholder: '-- Pilih Semester --',
        theme: 'bootstrap4',
        allowCenter: true
    });
    $('#pilih_program_studi<?= $data->id_mahasiswa?>').select2({
        placeholder: '-- Pilih Program Studi --',
        theme: 'bootstrap4',
        allowCenter: true
    });
</script>
<?php }?>
<div class="modal fade" id="upload_mahasiswa">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Upload Data Mahasiswa</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card bg-light">
                                <p class="p-2 m-0"><i class="fas fa-exclamation-triangle"></i><b> Pemberitahuan</b><br>
                                    Agar tidak ada kekeliruan dalam mengupload data, silahkan klik <b> Download Format</b> agar data bisa diupload sesuai dengan formatnya.
                            </div>
                        </div>
                        <label for="" class="col-sm-4">Upload File</label>
                        <div class="col-sm-8">
                            <input type="file" name="" id="" class="form-control form-control-sm mb-2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>