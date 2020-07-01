
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

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
				<li><a href="home"><span class="glyphicon glyphicon-modal-window"></span>Producto</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Buscar</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									
							
				</li>
				<li><a href="login"><span class="glyphicon glyphicon-user"></span>Iniciar session</a></li>
					
				
			
				<li><a href="customer_registration"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>
			</ul>
		</div>
	</div>
</div>	


	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
	<div class="container-fluid">


		<div class='nav nav-pills nav-stacked'>
			

		<div class="row">

			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				
                 <div id="get_category">
                       </div>

				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categorias</h4></a></li>
<?php
$query = $this->db->query("SELECT * FROM categories LIMIT 100");

foreach ($query->result() as $row)
{echo '<li onClick="fill(\''.addslashes($row->cat_title).'\');"><a href="profil.php?id='.$row->cat_title.'">'.$row->cat_title.'</a></li>';}?> 
				</div>
				<div id="get_brand">
				</div>
				<div class="nav nav-pills nav-stacked" >
					<li class="active" ><a href="#"></a></li>
					









				</div>
			</div>

			<div class="col-md-8 col-xs-12">

				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Productos</div>
					<div class="panel-body">
						<div id="get_product">


	<?php



foreach ($consulta->result() as $fila) {?>




				<div class="col-xs-12 col-sm-6 col-md-4">

							<div class='panel panel-info' id="img-contenedor" style="min-width: 80%;margin-right: auto;">

								<div class='panel-heading' ><label>Articulo:</label><?php echo $fila->product_title  ?>

									  <div>
                                      $.<?php echo $fila->product_price ?> 
                                  </div></div>
								<div class='panel-body'>
								 

                                       

                                 
   


 
<img  style=" cursor: pointer;max-width:148px;max-height: 192px; " src="<?php echo base_url("/product_images/$fila->product_image"); ?>" alt="StackOverflow"   />

	


								</div>
								<div class='panel-heading'>

								 	<button pid='$pro_id' style='float:right,margin-top:-10px;' id='product' class='btn btn-danger btn-xs'>Añadir a la cesta</button>
								</div>

							</div>
						</div>	
			
  





</tr>

<?php
}

 ?>



							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">
<li><a href="#" >Mas compras en tu tienda</a></li>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































