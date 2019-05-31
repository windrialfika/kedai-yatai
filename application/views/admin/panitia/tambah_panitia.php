<?php echo validation_errors(); ?>
<hr width="100%">
<form action="<?php echo base_url() ?>admin/panitia/tambah" method="post">
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
                         <select class="form-control" name="jabatan">
                            <option selected>Pilih</option>
                            <option value="Steering Commitee">Steering Commitee</option>
                            <option value="Ketua Panitia">Ketua Panitia</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Koordinator Acara">Koordinator Acara</option>
                            <option value="Koordinator PDD">Koordinator PDD</option>
                            <option value="Koordinator Perlengkapan">Koordinator Perlengkapan</option>
                            <option value="Koordinator Humas">Koordinator Humas</option>
                            <option value="Koordinator Konsumsi">Koordinator Konsumsi</option>
                            <option value="Koordinator Kesekretariatan">Koordinator Kesekretariatan</option>
                            <option value="Anggota Acara">Anggota Acara</option>
                            <option value="Anggota PDD">Anggota PDD</option>
                            <option value="Anggota Perlengkapan">Anggota Perlengkapan</option>
                            <option value="Anggota Humas">Anggota Humas</option>
                            <option value="Anggota Konsumsi">Anggota Konsumsi</option>
                            <option value="Anggota Kesekretariatan">Anggota Kesekretariatan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="width: 360px">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data" style="width: 360px" />
                </div>

            </form>