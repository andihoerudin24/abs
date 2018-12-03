<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Pelanggan</a>
        </li>
        <li class="breadcrumb-item active">Edit Data Pelanggan</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Pelanggan
                </div>
             <?php echo form_open('Pelanggan/edit') ?>
             <?php  echo form_hidden('kode_pelanggan',$pelanggan['kode_pelanggan']) ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="nama_bencana">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $pelanggan['nama_pelanggan'] ?>" required="">
                </div>
                <div class="form-group">
                    <label for="foto">Jenis Kelamin</label>
                  <?php
                  $options=array('LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN');
                  $batch = $pelanggan['kelamin'];
                  echo form_dropdown('kelamin', $options, $batch,['class'=>'form-control']);
                  ?>
                 </div>
                <div class="form-group">
                        <label for="foto">Alamat</label>
                <textarea name="alamat" cols="30" rows="10" class="form-control"><?php echo $pelanggan['alamat']  ?></textarea>
                </div>
                <div class="form-group">
                        <label for="korban jiwa">No Telpon</label>
                  <input type="number" value="<?php echo $pelanggan['no_telpon'] ?>" class="form-control"name="no_telpon" required="">
                 </div>
             </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Pelanggan') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>