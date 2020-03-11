<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce prueba</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/home.css"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.css.map"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap.min.css.map"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/all.min.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-grid.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-grid.css.map"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-grid.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-grid.min.css.map"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-reboot.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-reboot.css.map"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-reboot.min.css.map"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>plantilla/css/bootstrap-reboot.min.css"/>
        



     
      

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
				</ul>
			<ul class="nav navbar-nav navbar-right">
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hola Admin"?></a>
<li><a  href="<?=site_url('loginad/logout')  ?>" style="text-decoration:none; color:gray;" >Cerrar sesión</a></li>
					</ul>
		</div>
	</div>
</div>	

	
	<br/></p>  <br/>

	 <div style=" width: 100%;height: auto; background-color:#000;">
     <div class="collapse navbar-collapse navbar-ex1-collapse">

         <ul class="nav navbar-nav">
          <li><a href="../" target="_blank"><i class="fa fa-globe"></i> Ver tienda</a></li>
    
          <ul class="nav navbar-nav side-nav">
          <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="index.php?view=products"><i class="fa fa-glass"></i> Productos</a></li>
         <li><a href="index.php?view=categories"><i class="fa fa-th-list"></i> Categorias</a></li>
        
         </ul> </div></ul></div>



  <div class="row">
            <div class="col-md-12">
            	<br><br>
  <!-- Button trigger modal -->

<button type="button" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar categoria</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Categoria</h4>
        </div>
        <div class="modal-body">


<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>inicio/subir" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" name="cat_title" placeholder="Nombre de la categoria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre Corto</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" name="short_name" placeholder="Nombre corto">
    </div>
  </div>


 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen de categoria</label>
    <div class="col-lg-10">
   <input type="file" name="foto_categoria" required=" " placeholder="imagen">
    </div>
  </div>







  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
       
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">

      <button type="submit" class="btn btn-block btn-primary">Agregar Categoria</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
            <h1>Categorias</h1>
            <br>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Categorias
                </div>
                <div class="widget-body medium no-padding">

                  <div class="table-responsive">
                    <table class="table table-bordered">

                    <thead>
                    <th></th>
                      <th>Nombre</th>

                      <th>Activo</th>
                      <th></th>

                    </thead>

                      <tbody>


                        <tr>

                        <td style="width:30px;">
                          <a href="" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>

                        </td>

                        <td>
                           <div class="widget-body medium no-padding">
                            <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-2 col-xs-12">
        

        <div id="get_category">

        </div>

  <div class="nav nav-pills nav-stacked"> <li><a href=" ">


    
    
    
    <?php

foreach ($consulta->result() as $fila) {?>

 <?php echo $fila->cat_title  ?>

 <div style="position: relative,z-index:2,font-color:blue">

</a></li></div> 
<div class="nav nav-pills nav-stacked">
       <li><a href=""> 
      

  

 
<td style="width:90px;">
<a data-toggle="modal" href="#myModal-" class="btn btn-warning btn-xs"><i class="fa fa-edit" style="font-weight: 900"></i></a> 
  <!-- Button trigger modal -->

 
  <!-- Modal edi categoryyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy -->
  <div class="modal fade" id="myModal-" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar Categoria</h4>
        </div>
        <div class="modal-body">
<form class="form-horizontal" role="form" method="post" action="">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" name="name" value="" placeholder="Nombre de la categoria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre Corto</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" value="" name="short_name" placeholder="Nombre corto">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
         
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="">
      <button type="submit" class="btn btn-block btn-success">Actualizar Categoria</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->                         

                        <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> 
                       <?php
}
?>
                        </td>

                      

                     

                </tr>






                
     </body>
</html>