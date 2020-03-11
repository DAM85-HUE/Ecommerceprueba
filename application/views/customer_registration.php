<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>tusolutionweb</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/home.css"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.css.map"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.min.css.map"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-theme.css.map"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-theme.min.css.map"/>
         <script type="text/javascript" src="<?php echo base_url(); ?>plantilla/js/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plantilla/js/npm.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plantilla/js/jquery2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plantilla/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plantilla/js/bootstrap.min.js"></script>

	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Ecommerce prueba php</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="home"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Formulario de registro de cliente</div>
					<div class="panel-body">
					
					<?php echo form_open("customer_registration/add"); ?>
						<div class="row">
							<div class="col-md-6">
								<label for="f_name" >Nombre</label>
								<input type="text" id="f_name" name="f_name" class="form-control" >
							</div>
							<div class="col-md-6">
								<label for="f_name">Apellidos</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Repetir Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Celular</label>
								<input type="text" id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Dirección 1</label>
								<input type="text" id="address1" name="address1" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Dirección 2</label>
								<input type="text" id="address2" name="address2" class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Sign Up" type="submit" id="signup_button" name="Guardar"  class="btn btn-success btn-lg">
							</div>
						</div>
						 <?php echo form_close(); ?>
						
					</div>
					
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>



















