
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
     <div class="collapse navbar-collapse navbar-ex1-collapse"><br><br><br>
<h4>
         <ul class="nav navbar-nav">
          <li><a href="home" target="_blank"><img style="width: 12px; border-radius: 5px;"  src="<?php echo base_url("/assets/icocat/ojo.png"); ?>"></i> Ver tienda</a></li>
    
          <ul class="nav navbar-nav side-nav">
          <li><a href="administrador"><img style="width: 15px;"  src="<?php echo base_url("/assets/icocat/casa.png"); ?>"></i> Inicio</a></li>
          <li><a href="productos"><img style="width: 12px;"  src="<?php echo base_url("/assets/icocat/producto.png"); ?>"></i> Productos</a></li>
        
         </ul> </div></ul></div>





<div class="row" style="max-width: 100%">
            <div class="col-md-12">
              <br><br>
                  <a   href="vistaproducto" class="pull-right btn-sm btn btn-default" style="background-color:#337ab7;border-color: #2e6da4;color:#fff">Agregar Producto</a>
  <!-- Button trigger modal -->

  <!-- Modal -->

  

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
            
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class=""></i><h3> Producto</h3>
                </div>
                <br>
<br>


                  <?php 
                     
foreach ($consulta->result() as $fila) {?>
 &nbsp; <div class="col-md-12">

  <td><div class="table-responsive">
     <table class="table table-bordered">
            <td style="width:30px;">
     <a href="" target="_blank" class="btn btn-default btn-xs"><img style="width: 12px;"  src="<?php echo base_url("/assets/icocat/ojo.png"); ?>"></i></a>
      </td>
          <td>
           <h4 style="color: #2e6da4;cursor: pointer;"><?php echo $fila->product_title?></h4>
                       </td>
                       <td style="width:90px;">
                         <a data-toggle="modal" href="#myModal-" class="btn btn-warning btn-xs"><img style="width: 12px;"  src="<?php echo base_url("/assets/icocat/editar.png"); ?>"></i></a> 
  <!-- Button trigger modal -->

  <!-- Modal -->





        

 <div class="modal fade" id="myModal-<?php ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar Producto</h4>
       
   






 </div>
        <div class="modal-body">

      
  <?php

  if ($consulta != FALSE) 
   
  
foreach ($consulta->result() as $fila): ?>
  <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data"> 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">



      <input type="text" required class="form-control" name="product_title" value="<?=$fila->product_title   ?>" placeholder="Nombre del producto"> 
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <input type="text" required class="form-control" value="<?=$fila->product_desc?>" name="product_desc" placeholder="Nombre corto">
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
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen del producto</label>
    <div class="col-lg-10">
   <input type="file" name="product_image" required=" " placeholder="imagen">
    </div>
  </div>
   <?php endforeach ?>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="category_id" value="">
      <button type="submit" class="btn btn-block btn-success">Actualizar Producto</button>
    </div>
  </div>
  

</form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                       
                        <a href=""class="btn btn-danger btn-xs"><img style="width: 12px;"  src="<?php echo base_url("/assets/icocat/basura.png"); ?>"></i></a> 
                        </td>
                        </tr>


                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

          </div>












                        



 <?php
}
?> 


     </body>
</html>