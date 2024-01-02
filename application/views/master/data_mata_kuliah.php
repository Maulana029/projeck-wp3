<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="font-weight-normal">Data Mata Kuliah</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-database"></i> Data Master</li>
                    <li class="breadcrumb-item active"> Data Mata Kuliah</li>
                </ol>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="card-title">Data Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm" id="table">
                    <thead>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Kode</th>
                            <th>Jumlah SKS</th>
                            <th>No. Ruang</th>
                            <th>Kode Gabung</th>
                            <th>Dosen Pengajar</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($matkul as $data){ $no++;?>
                        <tr>
                            <td class="text-center"><?= $no;?></td>
                            <td><?= $data->nama_mata_kuliah?></td>
                            <td><?= $data->kode?></td>
                            <td><?= $data->jumlah_sks?></td>
                            <td><?= $data->no_ruang?></td>
                            <td><?= $data->kode_gabung?></td>
                            <td><?= $data->dosen_pengajar?></td>
                            <td>
                                <button class="btn btn-xs btn-success" data-target="#upd_matkul<?= $data->id_mata_kuliah?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-xs btn-danger" data-target="#del_matkul<?= $data-> id_mata_kuliah?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Kode</th>
                            <th>Jumlah SKS</th>
                            <th>No. Ruang</th>
                            <th>Kode Gabung</th>
                            <th>Dosen Pengajar</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" data-toggle="modal" data-target="#tambah_matkul" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah_matkul">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_mata_kuliah')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Mata Kuliah</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="nama_matkul" class="col-sm-4">Nama Mata Kuliah</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_matkul" id="nama_matkul" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="kode_matkul" class="col-sm-4">Kode</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_matkul" id="kode_matkul" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="jumlah_sks" class="col-sm-4">Jumlah SKS</label>
                        <div class="col-sm-8">
                            <input type="number" name="jumlah_sks" id="jumlah_sks" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="no_ruang" class="col-sm-4">No. Ruang</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_ruang" id="no_ruang" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="kode_gabung" class="col-sm-4">Kode Gabung</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_gabung" id="kode_gabung" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="tambah_dosen_pengajar" class="col-sm-4">Dosen Pengajar</label>
                        <div class="col-sm-8 mb-2">
                            <select name="dosen_pengajar" id="tambah_dosen_pengajar" class="form-control form-control-sm" required="true">
                                <option value=""></option>
                                <?php foreach($dosen as $data){?>
                                <option value="<?= $data->nama_dosen?>"><?= $data->nama_dosen?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php foreach($matkul as $data){?>
<div class="modal fade" id="upd_matkul<?= $data->id_mata_kuliah?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_mata_kuliah')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Mata Kuliah</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_mata_kuliah" value="<?= $data->id_mata_kuliah?>">
                        <label for="nama_matkul" class="col-sm-4">Nama Mata Kuliah</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_matkul" id="nama_matkul" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nama_mata_kuliah?>">
                        </div>
                        <label for="kode_matkul" class="col-sm-4">Kode</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_matkul" id="kode_matkul" class="form-control form-control-sm mb-2" required="true" value="<?= $data->kode?>">
                        </div>
                        <label for="jumlah_sks" class="col-sm-4">Jumlah SKS</label>
                        <div class="col-sm-8">
                            <input type="number" name="jumlah_sks" id="jumlah_sks" class="form-control form-control-sm mb-2" required="true" value="<?= $data->jumlah_sks?>">
                        </div>
                        <label for="no_ruang" class="col-sm-4">No. Ruang</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_ruang" id="no_ruang" class="form-control form-control-sm mb-2" required="true" value="<?= $data->no_ruang?>">
                        </div>
                        <label for="kode_gabung" class="col-sm-4">Kode Gabung</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_gabung" id="kode_gabung" class="form-control form-control-sm mb-2" required="true" value="<?= $data->kode_gabung?>">
                        </div>
                        <label class="col-sm-4">Dosen Pengajar</label>
                        <div class="col-sm-8 mb-2">
                            <select name="dosen_pengajar" id="edit_dosen_pengajar<?= $data->id_mata_kuliah?>" class="form-control form-control-sm" required="true" value="<?= $data->dosen_pengajar?>">
                                <option value=""></option>
                                <?php foreach($dosen as $data_dosen){?>
                                <option value="<?= $data_dosen->nama_dosen?>"<?php if($data->dosen_pengajar == "$data_dosen->nama_dosen"){echo 'selected';}?>><?= $data_dosen->nama_dosen?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="del_matkul<?= $data->id_mata_kuliah?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_mata_kuliah')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Mata Kuliah</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_mata_kuliah" value="<?= $data->id_mata_kuliah?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Nama Mata Kuliah: <?= $data->nama_mata_kuliah?> <br> Nama Dosen Pengajar: <?= $data->dosen_pengajar?></p>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $('#edit_dosen_pengajar<?= $data->id_mata_kuliah?>').select2({
        placeholder: '-- Pilih Dosen Pengajar --',
        theme: 'bootstrap4',
        allowClear: true
    });
</script>
<?php }?>