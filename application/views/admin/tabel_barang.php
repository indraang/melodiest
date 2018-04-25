<div class="x_panel">
  <div class="x_title">
    <h2>Tabel Barang</h2>
    <div style="float:right">
      <a href="<?= site_url();?>barang/add_barang" class="btn btn-primary">Tambah Barang</a>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="x_content">
    <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Barang</th>
          <th>Harga Barang</th>
          <th>Status Barang</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach($data->result() as $barang ):
         ?>
         <tr>
           <td><?= $i++; ?></td>
           <td><?= $barang->nama_brg; ?></td>
           <td><?= 'Rp. '.number_format($barang->harga_brg,0,',','.');?></td>
           <td style="vertical-align:middle;text-align:center">
             <?php if($barang->status_brg == 1){
               echo '<span class="label-success" style="padding:3px 10px;">Ready</label>';
             }else{
              echo '<span class="label-danger" style="padding:7px 10px;">Not Ready</label>';
             } ?>
           </td>
           <td style="vertical-align:middle;text-align:center;">
             <a href="<?= base_url();?>barang/detail_brg/<?= $barang->id_brg;?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
             <a href="<?= base_url();?>barang/update_brg/<?= $barang->id_brg;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
           </td>
         </tr>
       <?php endforeach;?>

      </tbody>
    </table>
  </div>
</div>
