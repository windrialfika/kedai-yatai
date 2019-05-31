<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/customer/edit" method="post">               
                  <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="id_customer" placeholder="ID Customer" value="<?php echo $detail['id_customer'] ?>" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap" value="<?php echo $detail['Nama'] ?>" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="Alamat" placeholder="Alamat" value="<?php echo $detail['Alamat'] ?>" required />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="No_Handphone" placeholder="No Handphone" value="<?php echo $detail['No_Handphone'] ?>" required />
                    </div>
                </div>
                

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan" style="width: 360px" />
                </div>

            </form>
