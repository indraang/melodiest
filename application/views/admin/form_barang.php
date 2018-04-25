          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $header; ?></h2>
                    <div class="clearfix"></div>
                    <?= validation_errors('<p style="color:#c0392b">','</p>');?>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Barang
                        </label>
                        <div id="nama_brg" class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_brg" value="<?= $nama_brg; ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Harga Barang
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="harga_brg" value="<?= $harga_brg;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berat Barang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?= $berat_brg;?>" class="form-control col-md-7 col-xs-12" type="text" name="berat_brg">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Barang</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select name="status_brg" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="1" <?php if($status_brg == 1){ echo "selected";}?>>Ready</option>
                            <option value="2"<?php if($status_brg == 2){ echo "selected";}?>>Not Ready</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Stok
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jmlh_stok" value="<?= $jmlh_stok;?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-2 col-xs-12">Keterangan</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="4" name="ktrngn"><?= $ktrngn;?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" href="#" onclick="window.history.go(-1)">Batal</button>
                          <button type="submit" id="submit" name="submit" value="Submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
