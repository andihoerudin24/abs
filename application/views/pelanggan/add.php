<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Pelanggan</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Pelanggan</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Pelanggan
                </div>
             <?php echo form_open('Pelanggan/tambah') ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="nama_bencana">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pelanggan" required="">
                </div>
                <div class="form-group">
                    <label for="foto">Jenis Kelamin</label>
                  <select name="kelamin" class="form-control">
                      <option value="LAKI-LAKI">LAKI-LAKI</option>
                      <option value="PEREMPUAN">PEREMPUAN</option>
                   </select>
                 </div>
                <div class="form-group">
                        <label for="foto">Alamat</label>
                <textarea name="alamat" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                        <label for="korban jiwa">No Telpon</label>
                  <input type="number" class="form-control"name="no_telpon" required="">
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