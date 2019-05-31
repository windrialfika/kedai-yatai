<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/customer/tambah" method="post">
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="id_customer" placeholder="ID Customer" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="alamat" placeholder="Alamat" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="no_handphone" placeholder="Nomor Telephone" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data" style="width: 360px" />
                </div>

            </form>