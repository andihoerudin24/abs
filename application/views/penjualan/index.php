<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Transaksi</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
    </ol>
    <div class="card mb-12">
        <div class="card-header">
            <i class="fa fa-list"></i>Transaksi Penjualan
        </div>
        <div class="card-body table-responsive">
        <?php echo form_open('Transaksi/add') ?>
         <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                    <label for="foto">Nama Barang</label>
                  <?php echo cmb_dinamis('kode_barang','barang','nama_barang','kd_barang') ?>
                 </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                    <label for="foto">Nama Pelanggan</label>
                  <?php echo cmb_dinamis('kode_pelanggan','pelanggan','nama_pelanggan','kode_pelanggan') ?>
                 </div>
             </div>
         </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                    <label for="foto">Jumlah</label>
                 <input type="number" name="jumlah" class="form-control">
                 </div>
             </div>
            <div class="col-md-6">
               <div class="form-group">
                    <label for="foto">keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                 </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    <?php echo anchor('Transaksi/selesai','Selesai',['class'=>'btn btn-info']) ?>
                 </div>
             </div>
         </div>
         <?php echo form_close() ?>
         <table class="table table-bordered">
         <div class="card-header">
              <tr class="success">
            <th colspan="6"> Detail Transaksi</th>
              </tr>
        </div>
      <th>No</th><th>Nama Barang</th><th>Jumlah</th><th>Harga Barang</th><th>Diskon</th><th>Subtotal</th><th> Cancel</th></tr>
       <?php $no=1; ?>
       <?php  $persen=100; ?>
       <?php $total=0; ?>
       <?php foreach($penjualan as $item): ?>
       <?php $harga=str_replace('.','',$item->harga_jual); ?>
       <?php $diskon=str_replace('%','',$item->diskon); ?>
       <?php $count=$harga*$diskon/100 ?>
       <?php $subtotal=$harga-$count ?>
        <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $item->nama_barang ?></td>
        <td><?php echo $item->jumlah ?></td>
        <td><?php echo $item->harga_jual ?></td>
        <td><?php echo $item->diskon ?></td>
        <td><?php echo "Rp.".number_format($subtotal*$item->jumlah).",-"  ?> </td>
        <td><?php echo anchor('Transaksi/cancel/'.$item->id_jual,'Cancel',['class'=>'btn btn-danger']) ?></td></tr>
        <?php $total=$total+($subtotal*$item->jumlah) ?>
<?php $no++ ?>
<?php  endforeach; ?>
<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td><td><?php echo "Rp.".number_format($total).",-" ?></td></tr>
</table>
    </div>
    </div>
</div>
