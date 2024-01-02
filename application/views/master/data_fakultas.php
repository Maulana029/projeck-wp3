<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="font-weight-normal">Data Fakultas & Prodi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-database"></i> Data Master</li>
                    <li class="breadcrumb-item active"> Data Fakultas & Prodi</li>
                </ol>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="card-title">Data Fakultas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="proyek">
                            <thead>
                                <tr>
                                    <th style="width: 12px;">No</th>
                                    <th>Nama Fakultas</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($fakultas as $data){ $no++;?>
                                <tr>
                                    <td class="text-center"><?= $no?></td>
                                    <td><?= $data->nama_fakultas?></td>
                                    <td>
                                        <button class="btn btn-xs btn-success" data-target="#upd_fakultas<?= $data->id_fakultas?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger" data-target="#del_fakultas<?= $data->id_fakultas?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="width: 12px;">No</th>
                                    <th>Nama Fakultas</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="modal" data-target="#tambah_fakultas" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="card-title">Data Program Studi</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="prodi">
                            <thead>
                                <tr>
                                    <th style="width: 12px;">No</th>
                                    <th>Fakultas</th>
                                    <th>Program Studi</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($prodi as $data){$no++;?>
                                <tr>
                                    <td class="text-center"><?= $no;?></td>
                                    <td><?= $data->fakultas?></td>
                                    <td><?= $data->program_studi?></td>
                                    <td>
                                        <button class="btn btn-xs btn-success" data-target="#upd_prodi<?= $data->id_prodi?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger" data-target="#del_prodi<?= $data->id_prodi?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="width: 12px;">No</th>
                                    <th>Fakultas</th>
                                    <th>Program Studi</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="modal" data-target="#tambah_prodi" data-keyword="false" data-backdrop="static" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah_fakultas">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_fakultas')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Data Fakultas</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="fakultas" class="col-sm-4">Fakultas</label>
                        <div class="col-sm-8">
                            <input type="text" name="fakultas" id="fakultas" class="form-control form-control-sm mb-2" required="true">
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
<?php foreach($fakultas as $data){?>
<div class="modal fade" id="upd_fakultas<?= $data->id_fakultas?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_fakultas')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Data Fakultas</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_fakultas" value="<?= $data->id_fakultas?>">
                        <label for="fakultas" class="col-sm-4">Fakultas</label>
                        <div class="col-sm-8">
                            <input type="text" name="fakultas" id="fakultas" class="form-control form-control-sm mb-2" required="true" value="<?= $data->nama_fakultas?>">
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
<div class="modal fade" id="del_fakultas<?= $data->id_fakultas?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_fakultas')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Data Fakultas</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_fakultas" value="<?= $data->id_fakultas?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Nama Fakultas: <?= $data->nama_fakultas?></p>
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
<div class="modal fade" id="tambah_prodi">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_prodi')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Data Program Studi</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="pilih_fakultas" class="col-sm-4">Fakultas</label>
                        <div class="col-sm-8 mb-2">
                            <select name="pilih_fakultas" id="pilih_fakultas" class="form-control form-control-sm" required="true">
                                <option value=""></option>
                                <?php foreach($fakultas as $data){?>
                                <option value="<?= $data->nama_fakultas?>"><?= $data->nama_fakultas?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label class="col-sm-4">Program Studi</label>
                        <div class="col-sm-8">
                            <input type="text" name="prodi" id="prodi" class="form-control form-control-sm mb-2" required="true" required="true">
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
<?php foreach($prodi as $data){?>
<div class="modal fade" id="upd_prodi<?= $data->id_prodi?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_prodi')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Data Program Studi</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_prodi" value="<?= $data->id_prodi?>">
                        <label for="edit_pilih_fakultas<?= $data->id_prodi?>" class="col-sm-4">Fakultas</label>
                        <div class="col-sm-8 mb-2">
                            <select name="pilih_fakultas" id="edit_pilih_fakultas<?= $data->id_prodi?>" class="form-control form-control-sm" required="true">
                                <?php foreach($fakultas as $data_fakultas){?>
                                <option value="<?= $data_fakultas->nama_fakultas?>"<?php if($data->fakultas == "$data_fakultas->nama_fakultas"){echo 'selected';}?>><?= $data_fakultas->nama_fakultas?></option>
                                <?php }?>
                            </select>
                        </div>
                        <label class="col-sm-4">Program Studi</label>
                        <div class="col-sm-8">
                            <input type="text" name="prodi" id="prodi" class="form-control form-control-sm mb-2" required="true" value="<?= $data->program_studi?>">
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
<script>
    $('#edit_pilih_fakultas<?= $data->id_prodi?>').select2({
        placeholder: '-- Pilih Program Studi --',
        theme: 'bootstrap4',
        allowCenter: true
    })
</script>
<div class="modal fade" id="del_prodi<?= $data->id_prodi?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_prodi')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Data Program Studi</h4>
                    <button class="close text-light text-bold" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_prodi" value="<?= $data->id_prodi?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Nama Program Studi: <?= $data->program_studi?></p>
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