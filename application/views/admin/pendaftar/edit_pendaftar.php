<hr width="100%">
<form action="<?php echo base_url() ?>admin/pendaftar/edit" method="post">
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="<?php echo $detail['nim'] ?>" />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $detail['nama'] ?>" />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="radio" name="jk" value="Pria"> Pria
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="<?php echo $detail['kelas'] ?>" />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="notelp" placeholder="Nomor Telephone" value="<?php echo $detail['notelp'] ?>" />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="email" placeholder="E-Mail" value="<?php echo $detail['email'] ?>" />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="tanggal" value="<?php echo $detail['tanggal'] ?>" />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="jam" value="<?php echo $detail['jam'] ?>" />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Ubah Data" style="width: 360px" />
                </div>

            </form>