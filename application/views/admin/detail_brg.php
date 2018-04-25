<div class="x_panel">
  <div class="x_title">
    <h2>Detail Barang</h2>
    <div class="clearfix"></div>
  </div>

  <div class="x_content">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <img src="<?= site_url(); ?>assets/unggah/<?= $gbr_brg;?>" style="width:100%;">
    </div>
    <div class="col-md-6 col-sm-6">
      <table class="table table-striped">
        <tr>
          <td width="150px;">Nama Barang</td>
          <td>: <?= $nama_brg;?></td>
        </tr>
        <tr>
          <td width="150px;">Harga Barang</td>
          <td>: <?= 'Rp.'.number_format($harga_brg,0,',','.');?></td>
        </tr>
        <tr>
          <td width="150px;">Kondisi Barang</td>
          <td>: <?= $kondisi_brg;?></td>
        </tr>
        <tr>
          <td width="150px;">Status Barang</td>
          <td>: <?php if($ktrsd_brg == 1){
            echo '<span class="label-success" style="padding:3px 10px;">Ready</label>';
          }else{
           echo '<span class="label-danger" style="padding:7px 10px;">Not Ready</label>';
          } ?></td>
        </tr>
        <tr>
          <td width="150px;">Jumlah Stok</td>
          <td>: <?= $jmlh_stok;?></td>
        </tr>
        <tr>
          <td width="150px;">Keterangan</td>
          <td>: <?= nl2br ($ktrngn);?></td>
        </tr>
      </table>
     
      <a href="#" class="btn btn-primary" onclick="window.history.go(-1)">Kembali</a>
      <a href="<?= site_url();?>barang/update_brg/<?= $id_brg;?>" class="btn btn-info">Edit</a>
    </div>

    </div>'
  </d'iv>
</div>
