<hr width="100%">
   <table width=100% class="table table-hover" border="1px">
    <thead>
        <tr>
           <th class="thcol">No</th>
           <th class="thcol">Order ID</th>
           <th class="thcol">ID Menu</th>
           <th class="thcol">Nama Menu</th>
           <th class="thcol">Jumlah</th>
           <th class="thcol">Harga Satuan</th>
           <th class="thcol">Tanggal</th>
        </tr>
    </thead>
    
   <tbody>
       
       <?php
       $no = 1;
       foreach($mining as $row) {
       ?>
       
       <tr>
           <td align='center'><?php echo $no;?></td>
           <td align='center'><?php echo $row['orderid'] ?></td>
           <td align='center'><?php echo $row['id_menu']; ?></td>
		   <td><?php echo $row['nama_menu']; ?></td>
           <td align='center'><?php echo $row['quantity']; ?></td>
           <td align='center'><?php echo $row['price']; ?></td>
           <td align='center'><?php echo $row['date']; ?></td>
           
           
       </tr>
       <?php
           $no++;
       }
       ?>
       
   </tbody>
</table>
<hr width="100%">
<br />