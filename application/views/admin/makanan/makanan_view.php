<hr width="100%">
  <a href="<?php echo base_url() ?>admin/makanan/tambah" class="btn btn-primary">Tambah</a><br /><br />
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">ID</th>
           <th class="thcol">Nama Makanan</th>
           <th class="thcol">Gambar</th>
           <th class="thcol">Harga Satuan</th>
           <th class="thcol">Kategori</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       $no = 1;
       foreach($makanan as $row) {
       ?>
       
       <tr>
           <td align='center'><?php echo $no;?></td>
           <td><?php echo $row['id_menu'] ?></td>
           <td><?php echo $row['nama_menu']; ?></td>
           <td><?php echo $row['img_menu']; ?></td>
           <td><?php echo $row['harga_satuan']; ?></td>
           <td><?php echo $row['id_category']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/makanan/edit/<?php echo $row['id_menu'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/makanan/delete/<?php echo $row['id_menu'] ?>' onClick="return confirm('Anda yakin menghapus <?php echo $row['nama_menu'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
           $no++;
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />