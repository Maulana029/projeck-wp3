<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="font-weight-normal">Data Dosen</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-database"></i> Data Master</li>
                    <li class="breadcrumb-item active"> Data Dosen</li>
                </ol>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header bg-info">
                <h4 class="card-title">Data Dosen</h4>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped" id="table">
                    <thead>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Dosen</th>
                            <th>NIP</th>
                            <th>NIDN</th>
                            <th>Jabatan</th>
                            <th style="width: 120px;">Username</th>
                            <th style="width: 120px;">Password</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($dosen as $data){ $no++;?>
                        <tr>
                            <td class="text-center"><?= $no?></td>
                            <td><?= $data->nama_dosen?></td>
                            <td><?= $data->nip?></td>
                            <td><?= $data->nidn?></td>
                            <td><?= $data->jabatan_dosen?></td>
                            <td><?= $data->username_dosen?></td>
                            <td><?= $data->password_dosen?></td>
                            <td>
                                <button class="btn btn-xs btn-success" data-target="#edit_dosen<?= $data->id_dosen?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-xs btn-danger" data-target="#del_dosen<?= $data->id_dosen?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Dosen</th>
                            <th>NIP</th>
                            <th>NIDN</th>
                            <th>Jabatan</th>
                            <th style="width: 120px;">Username</th>
                            <th style="width: 120px;">Password</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" data-target="#tambah_dosen" data-toggle="modal" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href='<?= base_url('master/akses_dosen')?>'"><i class="fas fa-key"></i> Refresh Akses</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah_dosen">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_dosen')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Data Dosen</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="nama_dosen" class="col-sm-4">Nama Dosen</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="nip" class="col-sm-4">NIP</label>
                        <div class="col-sm-8">
                            <input type="number" name="nip" id="nip" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="nidn" class="col-sm-4">NIDN</label>
                        <div class="col-sm-8">
                            <input type="number" name="nidn" id="nidn" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="jabatan" class="col-sm-4">Jabatan</label>
                        <div class="col-sm-8">
                            <select name="jabatan" id="jabatan" class="form-control form-control-sm mb-2" required="true">
                                <option value="">-- Pilih Jabatan --</option>
                                <option value="Rektor">Rektor</option>
                                <option value="Dekan">Dekan</option>
                                <option value="Kajur">Kajur</option>
                                <option value="Kaprodi">Kaprodi</option>
                                <option value="Pembimbing Akademik">Pembimbing Akademik</option>
                                <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                <option value="Staf">Staf</option>
                            </select>
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
<?php foreach($dosen as $data){?>
<div class="modal fade" id="edit_dosen<?= $data->id_dosen?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_dosen')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Data Dosen</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_dosen" value="<?= $data->id_dosen?>">
                        <label for="nama_dosen" class="col-sm-4">Nama Dosen</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nama_dosen?>">
                        </div>
                        <label for="nip" class="col-sm-4">NIP</label>
                        <div class="col-sm-8">
                            <input type="number" name="nip" id="nip" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nip?>">
                        </div>
                        <label for="nidn" class="col-sm-4">NIDN</label>
                        <div class="col-sm-8">
                            <input type="number" name="nidn" id="nidn" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nidn?>">
                        </div>
                        <label for="jabatan" class="col-sm-4">Jabatan</label>
                        <div class="col-sm-8">
                            <select name="jabatan" id="jabatan" class="form-control form-control-sm mb-2" required="true" aria-valuemax="<?= $data->jabatan_dosen?>">
                                <?php
                                    if($data->jabatan_dosen == "Rektor")
                                    echo "<option value='Rektor' selected>Rektor</option>";
                                    else echo "<option value='Rektor' selected>Rektor</option>";                                    

                                    if($data->jabatan_dosen == "Dekan")
                                    echo "<option value='Dekan' selected>Dekan</option>";
                                    else echo "<option value='Dekan'>Dekan</option>";                                    

                                    if($data->jabatan_dosen == "Kajur")
                                    echo "<option value='Kajur' selected>Kajur</option>";
                                    else echo "<option value='Kajur'>Kajur</option>";                   
                                    
                                    if($data->jabatan_dosen == "Kaprodi")
                                    echo "<option value='Kaprodi' selected>Kaprodi</option>";
                                    else echo "<option value='Kaprodi'>Kaprodi</option>";
                                    
                                    if($data->jabatan_dosen == "Pembimbing Akademik")
                                    echo "<option value='Pembimbing Akademik' selected>Pembimbing Akademik</option>";
                                    else echo "<option value='Pembimbing Akademik'>Pembimbing Akademik</option>";
                                    
                                    if($data->jabatan_dosen == "Tenaga Kependidikan")
                                    echo "<option value='Tenaga Kependidikan' selected>Tenaga Kependidikan</option>";
                                    else echo "<option value='Tenaga Kependidikan'>Tenaga Kependidikan</option>";
                                    
                                    if($data->jabatan_dosen == "Staf")
                                    echo "<option value='Staf' selected>Staf</option>";
                                    else echo "<option value='Staf'>Staf</option>";
                                ?>
                            </select>
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

<div class="modal fade" id="del_dosen<?= $data->id_dosen?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_dosen')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Data Dosen</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_dosen" value="<?= $data->id_dosen?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Nama Dosen: <?= $data->nama_dosen?></p>
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Jabatan Dosen: <?= $data->jabatan_dosen?></p>
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
<?php }?>