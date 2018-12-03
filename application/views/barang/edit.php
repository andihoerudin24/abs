<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Barang</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Barang</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Barang
                </div>
             <?php echo form_open('Barang/edit') ?>
             <?php echo form_hidden('kd_barang',$barang['kd_barang']) ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="nama_bencana">Nama Barang</label>
                    <input type="text" value="<?php echo $barang['nama_barang'] ?>" class="form-control" name="nama_barang" required="">
                </div>
                <div class="form-group">
                        <label for="foto">Harga Beli</label>
                     <input type="text" value="<?php echo $barang['harga_beli'] ?>"  name="harga_beli" class="form-control uang" requred="">
                </div>
                <div class="form-group">
                        <label for="foto">Harga Jual</label>
                     <input type="text" value="<?php echo $barang['harga_jual'] ?>"  name="harga_jual" class="form-control uang" requred="">
                </div>
                <div class="form-group">
                        <label for="korban jiwa">Stok</label>
                  <input type="number" value="<?php echo $barang['stok'] ?>"  class="form-control"name="stok" required="">
                 </div>
                <div class="form-group">
                        <label for="keterangan">Diskon</label>
                  <input type="text" value="<?php echo $barang['diskon'] ?>"  class="form-control" name="diskon" required="">
               </div>
                <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                  <textarea name="keterangan" cols="30" rows="10" class="form-control"><?php echo $barang['keterangan'] ?></textarea>
               </div>
            </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Barang') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>