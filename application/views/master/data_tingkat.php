<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="font-weight-normal">Data Tingkat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-database"></i> Data Master</li>
                    <li class="breadcrumb-item active"> Data Tingkat</li>
                </ol>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header bg-info">
                <h4 class="card-title">Data Tingkat</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm" id="proyek">
                    <thead>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Tingkat</th>
                            <th>Deskripsi</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($tingkat as $data){$no++;?>
                        <tr>
                            <td class="text-center"><?= $no;?></td>
                            <td><?= $data->tingkat?></td>
                            <td><?= $data->deskripsi?></td>
                            <td>
                                <button class="btn btn-xs btn-success" data-target="#upd_tingkat<?= $data->id_tingkat?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-xs btn-danger" data-target="#del_tingkat<?= $data->id_tingkat?>" data-toggle="modal" data-keyword="false" data-backdrop="static"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width: 12px;">No</th>
                            <th>Tingkat</th>
                            <th>Deskripsi</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambah_tingkat" data-keyword="false" data-backdrop="static" ><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah_tingkat">
    <div class="modal-dialog">
        <form action="<?= base_url('master/add_tingkat')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Tambah Tingkat</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <label for="tingkat" class="col-sm-4">Tingkat</label>
                        <div class="col-sm-8">
                            <input type="number" name="tingkat" id="tingkat" class="form-control form-control-sm mb-2" required="true">
                        </div>
                        <label for="deskripsi" class="col-sm-4">Deskripsi</label>
                        <div class="col-sm-8">
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control form-control-sm mb-2" required="true">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="moda">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php foreach($tingkat as $data){?>
<div class="modal fade" id="upd_tingkat<?= $data->id_tingkat?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/upd_tingkat')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Edit Tingkat</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_tingkat" value="<?= $data->id_tingkat?>">
                        <label for="tingkat" class="col-sm-4">Tingkat</label>
                        <div class="col-sm-8">
                            <input type="number" name="tingkat" id="tingkat" class="form-control form-control-sm mb-2" required="true" value="<?= $data->tingkat?>">
                        </div>
                        <label for="deskripsi" class="col-sm-4">Deskripsi</label>
                        <div class="col-sm-8">
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control form-control-sm mb-2" required="true" value="<?= $data->deskripsi?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="moda">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="del_tingkat<?= $data->id_tingkat?>">
    <div class="modal-dialog">
        <form action="<?= base_url('master/del_tingkat')?>" method="post">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">Hapus Tingkat</h4>
                    <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <input type="hidden" name="id_tingkat" value="<?= $data->id_tingkat?>">
                        <p style="font-weight: bold; font-size: 20px; font-family: arial;">Tingkat: <?= $data->tingkat .' / '. $data->deskripsi ?></p>
                    </div>
                </div>
                <div class="modal-footer bg-light justify-content-between">
                    <button class="btn btn-sm btn-danger" data-dismiss="moda">Close</button>
                    <button class="btn btn-sm btn-info">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }?>