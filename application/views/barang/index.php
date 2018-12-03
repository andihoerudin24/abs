<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Barang</a>
        </li>
        <li class="breadcrumb-item active">Data Barang</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Barang
            <?php echo anchor('Barang/tambah','Tambah Barang',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Diskon</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Diskon</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($barang as $item) : ?>
                    <?php $harga_beli=str_replace('.','',$item->harga_beli) ?>
                    <?php $harga_jual=str_replace('.','',$item->harga_jual) ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->nama_barang ?></td>
                            <td><?php echo "Rp.".number_format($harga_beli).",-" ?></td>
                            <td><?php echo "Rp.".number_format($harga_jual).",-" ?></td>
                            <td><?php echo $item->stok ?></td>
                            <td><?php echo $item->diskon ?></td>
                            <td><?php echo $item->keterangan ?></td>
                            <td>
                                <a href="<?php echo site_url('Barang/edit/'.$item->kd_barang) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <?php echo form_open('Barang/hapus/'.$item->kd_barang) ?>
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
