<hr width="100%">
  <a href="<?php echo base_url() ?>admin/panitia/tambah" class="btn btn-primary">Tambah</a><br /><br />
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">NIM</th>
           <th class="thcol">Nama</th>
           <th class="thcol">Kelas</th>
           <th class="thcol">No. Telephone</th>
           <th class="thcol">Jabatan</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       $no = 1;
       foreach($panitia as $row) {
       ?>
       
       <tr>
           <td align='center'><?php echo $no;?></td>
           <td><?php echo $row['nim'] ?></td>
           <td><?php echo $row['nama']; ?></td>
           <td><?php echo $row['kelas']; ?></td>
           <td><?php echo $row['notelp']; ?></td>
           <td><?php echo $row['jabatan']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/panitia/edit/<?php echo $row['nim'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/panitia/delete/<?php echo $row['nim'] ?>' onClick="return confirm('Anda yakin menghapus panitia <?php echo $row['nama'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
           $no++;
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />