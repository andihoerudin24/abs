<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Pelanggan</a>
        </li>
        <li class="breadcrumb-item active">Data Pelanggan</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Pelanggan
            <?php echo anchor('Pelanggan/tambah','Tambah Pelanggan',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($pelanggan as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->nama_pelanggan ?></td>
                            <td><?php echo $item->kelamin ?></td>
                            <td><?php echo $item->alamat ?></td>
                            <td><?php echo $item->no_telpon ?></td>
                            <td>
                                <a href="<?php echo site_url('Pelanggan/edit/'.$item->kode_pelanggan) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <?php echo form_open('Pelanggan/hapus/'.$item->kode_pelanggan) ?>
                                <button type="submit" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;"
                                    onclick="return confirm('Anda Yakin Ingin Menghapus?');">
                                    Delete
                                    <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                                </button>
                                <?php echo form_close() ?>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
