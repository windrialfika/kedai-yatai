<hr width="100%">
  <a href="<?php echo base_url() ?>admin/pendaftar/tambah" class="btn btn-primary">Tambah</a><br /><br />
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">Nama</th>
           <th class="thcol">NIM</th>
           <th class="thcol">Jenis Kelamin</th>
           <th class="thcol">Kelas</th>
           <th class="thcol">Tanggal Daftar</th>
           <th class="thcol">Jam</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       $no = 1;
       foreach($pendaftar as $row) {
       ?>
       
       <tr>
           <td align='center'><?php echo $no;?></td>
           <td><?php echo $row['nama'] ?></td>
           <td><?php echo $row['nim']; ?></td>
           <td><?php echo $row['jk']; ?></td>
           <td><?php echo $row['kelas']; ?></td>
           <td><?php echo $row['tanggal']; ?></td>
           <td><?php echo $row['jam']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/pendaftar/edit/<?php echo $row['nim'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/pendaftar/delete/<?php echo $row['nim'] ?>' onClick="return confirm('Anda yakin menghapus pendaftar <?php echo $row['nama'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
           $no++;
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />