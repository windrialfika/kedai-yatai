<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/jadwal/edit" method="post">
                
                  <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="no" placeholder="No" value="<?php echo $detail['no'] ?>" required />
                    </div>
                    </div>
                 
                  <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="<?php echo $detail['nim'] ?>" required />
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                     <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $detail['nama'] ?>" required />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></div>
                         <select class="form-control" name="hari" required />
                            <option selected>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                         <input type="text" class="form-control" name="tanggal" placeholder="Tanggal (YYYY-MM-DD)" value="<?php echo $detail['tanggal'] ?>" required />
                    </div>
                </div>
                
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                         <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></div>
                         <select class="form-control" name="sesi" required />
                            <option selected>Pilih Sesi</option>
                            <option value="08.40 - 10.30">08.40 - 10.30</option>
                            <option value="10.30 - 12.30">10.30 - 12.30</option>
                            <option value="12.30 - 15.00">12.30 - 15.00</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan" style="width: 360px" />
                </div>

            </form>