<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/makanan/tambah" method="post">
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="id_menu" placeholder="Id Menu Baru" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" required />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></div>
                         <select class="form-control" name="id_category">
                            <option selected>Pilih Kategori</option>
                            <option value="YT0001">Makanan</option>
                            <option value="YT0002">Tusukan</option>
                            <option value="YT0003">Minuman</option>
                        </select>
                    </div>
                </div>
                
				<div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="harga_satuan" placeholder="Harga Satuan" required />
                    </div>
                </div>
				
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="img_menu" placeholder="Nama_Gambar.jpg/png" required />
                    </div>
                </div>
                
              
                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data" style="width: 360px" />
                </div>

            </form>