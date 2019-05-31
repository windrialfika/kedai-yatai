<!DOCTYPE html>
<html>
<head>
<title>Login | Kedai Yatai Tebet</title>
	    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	    <link href="<?php echo base_url() ?>assets/css/queryLoader.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/loginstyle.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url() ?>assets/js/jquery.tools.min.js" type="text/javascript"></script>
	    <script src="<?php echo base_url() ?>assets/js/queryLoader.js" type="text/javascript"></script>    

</head>

<body OnLoad="document.login.username.focus();" class="bodybg">
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-family: sans-serif" href="<?php echo base_url() ?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
                    <li>
                        <a style="font-family: sans-serif" href="<?php echo base_url() ?>user/dasbor/menu_makan">Menu Makanan</a>
                    </li>
                    <li>
                        <a style="font-family: sans-serif" href="<?php echo base_url() ?>user/dasbor/menu_order">Order</a>
                    </li>
                    <li>
                        <a style="font-family: sans-serif" href="<?php echo base_url() ?>user/dasbor/about">About</a>
                    </li>
                    <li>
                        <a style="font-family: sans-serif" href="<?php echo base_url() ?>user/dasbor/contact">Contact</a>
                    </li>
                    <li>
                        <a style="font-family: sans-serif" href="<?php base_url() ?>admin/Dasbor">Login</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<div class="loginarea">
		<h2>Administrator Page</h2>
                <a href="../../controllers/admin/Dasbor.php"></a>
		<p>Silahkan log-in untuk melanjutkan</p><br />
		
        <?php
        // Cetak session
        if($this->session->flashdata('sukses')) {
            echo '<p style="color: red">'.$this->session->flashdata('sukses').'</p>';
        }
        // Cetak error
        echo validation_errors('<p style="color: red">','</p>');
        ?>

	<form name="login" method="POST" action="<?php echo base_url('admin/login') ?>">
    <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                      <input type="text" class="form-control" name="username" placeholder="Username" />
                    </div>
                </div>
                <div class="form-group" style="width: 360px">
                   <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></div>
                      <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Log In</button>
</form>
</div>

<div id="footer">
		&copy; General Public Licence
</div>
    
<script>
		QueryLoader.selectorPreload = "body";
		QueryLoader.init();
</script>


</body>
</html>
