<body class="bodybg">
  <div id="header">
   <img src="<?php echo base_url() ?>assets/images/logo.png" width="100px" height="25px">
</div>

<div class="side">
    <a href="<?php echo base_url('admin/dasbor') ?>" class="opt"><span class="glyphicon glyphicon-home" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Home</a>
    
    <!--<a href="<?php echo base_url('admin/panitia') ?>" class="opt" style="margin-top: 68px"><span class="glyphicon glyphicon-user" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Data Panitia</a>-->
    
    <a href="<?php echo base_url('admin/makanan') ?>" class="opt" style="margin-top: 68px"><span class="glyphicon glyphicon-cutlery" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Data Makanan</a>
    
    <a href="<?php echo base_url('admin/jadwal') ?>" class="opt" style="margin-top: 106px"><span class="glyphicon glyphicon-user" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Data Customer</a>
    
    <a href="<?php echo base_url('admin/presensi') ?>" class="opt" style="margin-top: 144px"><span class="glyphicon glyphicon-stats" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Statistik</a>
    
    <a href="<?php echo base_url('admin/login/logout') ?>" title="Logout" onClick="return confirm('Kamu yakin mau pergi dari aku ?')" class="opt" style="margin-top: 182px"><span class="glyphicon glyphicon-log-out" aria-hidden="true" style="margin-top: 3px; margin-left: 10px; margin-right: 10px;"></span>Logout</a>
    
</div>

<div class="konten">
    <h2><?php echo $title ?></h2>