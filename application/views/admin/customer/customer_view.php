<hr width="100%">
  <a href="<?php echo base_url() ?>admin/customer/tambah" class="btn btn-primary">Tambah</a><br /><br />
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">id_customer</th>
           <th class="thcol">Nama</th>
           <th class="thcol">Alamat</th>
           <th class="thcol">No_Handphone</th>
           <th class="thcol">Action</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       $no = 1;
       foreach($data_customer as $row) {
       ?>
       
       <tr>
           <td align='center'><?php echo $no;?></td>
           <td><?php echo $row['id_customer'] ?></td>
           <td><?php echo $row['Nama'] ?></td>
           <td><?php echo $row['Alamat']; ?></td>
           <td><?php echo $row['No_Handphone']; ?></td>
           <td align='center'>
           <a href='<?php echo base_url() ?>admin/customer/edit/<?php echo $row['id_customer'] ?>' class="btn btn-warning">Edit</a>
           <a href='<?php echo base_url() ?>admin/customer/delete/<?php echo $row['id_customer'] ?>' onClick="return confirm('Anda yakin menghapus customer <?php echo $row['Nama'] ?> ?')" class="btn btn-danger">Hapus</a></td>
       </tr>
       <?php
           $no++;
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />