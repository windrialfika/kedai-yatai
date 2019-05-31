<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/pendaftar/tambah" method="post">
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="radio" name="jk" value="Pria"> Pria
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="kelas" placeholder="Kelas" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="notelp" placeholder="Nomor Telephone" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></div>
                         <input type="text" class="form-control" name="email" placeholder="E-Mail" required />
                    </div>
                </div>
                <input name="tanggal" type="hidden" value="<?php echo date('Y-m-d') ?>">
                <input name="jam" type="hidden" value="<?php echo date('H:i:s') ?>">

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data" style="width: 360px" />
                </div>

            </form>