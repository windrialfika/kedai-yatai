<hr width="100%">
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">NIM</th>
           <th class="thcol">Nama</th>
           <th class="thcol">Tanggal</th>
           <th class="thcol">Sesi</th>
           <th class="thcol">Tanggal Presensi</th>
           <th class="thcol">Waktu Presensi</th>
           <th class="thcol">Keterangan</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       foreach($presensi as $row) {
       ?>
       
       <tr>
           <td><?php echo $row['no'] ?></td>
           <td><?php echo $row['nim'] ?></td>
           <td><?php echo $row['nama']; ?></td>
           <td><?php echo $row['tanggal']; ?></td>
           <td><?php echo $row['sesi']; ?></td>
           <td><?php echo $row['tanggal_presensi']; ?></td>
           <td><?php echo $row['jam_presensi']; ?></td>
           <td><?php echo $row['keterangan']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/presensi/edit/<?php echo $row['no'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/presensi/delete/<?php echo $row['no'] ?>' onClick="return confirm('Anda yakin menghapus presensi <?php echo $row['nama'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />