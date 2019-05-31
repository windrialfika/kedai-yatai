<hr width="100%">
  <a href="<?php echo base_url() ?>admin/jadwal/tambah" class="btn btn-primary">Tambah</a><br /><br />
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">NIM</th>
           <th class="thcol">Nama</th>
           <th class="thcol">Hari</th>
           <th class="thcol">Tanggal</th>
           <th class="thcol">Sesi</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       foreach($jadwal as $row) {
       ?>
       
       <tr>
           <td><?php echo $row['no'] ?></td>
           <td><?php echo $row['nim'] ?></td>
           <td><?php echo $row['nama']; ?></td>
           <td><?php echo $row['hari']; ?></td>
           <td><?php echo $row['tanggal']; ?></td>
           <td><?php echo $row['sesi']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/jadwal/edit/<?php echo $row['no'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/jadwal/delete/<?php echo $row['no'] ?>' onClick="return confirm('Anda yakin menghapus jadwal <?php echo $row['nama'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />