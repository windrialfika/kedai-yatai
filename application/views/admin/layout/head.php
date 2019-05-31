<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control Panel</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/queryLoader.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/loginstyle.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url() ?>assets/js/jquery.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/queryLoader.js" type="text/javascript"></script> 
</head>