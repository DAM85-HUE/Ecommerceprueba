
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce prueba</title>
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>



<style >
@media screen and (max-width: 700px) {
#search_btn{display:none;
}
#search{

display: none;

}
</style>







				<a href="#" class="navbar-brand"> Ecommerce Prueba php</a>
			</div>

		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="home"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				
			</ul>
			
								
							
						</div>
					</div>
				</li>
				
			</ul>
		</div>
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
				<div class="panel panel-primary" style="width:50%;height:auto;border: 0px;margin-top: 70px;margin-left:30%;">


				
						<div style="width:300px;">
							<div class="panel panel-primary">
								
								<div class="panel-heading">
									<label> Administrador de sisito</label>
								    <form action="" method="POST">
									<label for="email">Email</label>
									<input type="email" name="email_address"class="form-control" pattern="[A-Za-z0-100000000_-@]{1,35}" id="email" required placeholder="Usuario" />
									<label for="email">Password</label>
									<input type="password"name="password"class="form-control" pattern="[A-Za-z0-900000_-]{1,25}" id="password" required placeholder="Password" />
									<p><br/></p>
									<a href="#" style="color:white; list-style:none;"> Password Olvidado</a>
					<input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
								</form>


								</div>

							</div>
						</div>
					</ul>


					
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
