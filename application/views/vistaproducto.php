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
 <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
  <!-- Button trigger modal -->


            
            </div>
            </div><br><br>
<h1 style="font-size:3.0em;margin-left: 50px;">NUEVO PRODUCTO</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                 
                </div>
                <div class="panel-body " style="font-size:1.7em">
<?php #echo  form_open_multipart("vistaproducto/cargar_archivo"); ?>
<center>
<form class="form-horizontal"  style="width:50%; "     role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url()?>vistaproducto/subir">
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" style="font-size:1.0em">Nombre</label>
    <div class="col-lg-12">
      <input type="text" class="form-control" name="product_title" placeholder="Nombre del producto"style="font-size:1.0em;" >
    </div>
  </div><br>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label" style="font-size:1.0em">Descripcion</label>
    <div class="col-lg-12"><br>
      <textarea class="form-control" id="inputPassword1" placeholder="Descripcion" rows="6" name="product_desc"style="font-size:1.0em;"></textarea>
    </div>
  </div>
  <div class="form-group">

    <label for="inputEmail1" class="col-lg-2 control-label" style="font-size:1.0em">Precio $</label>
    <div class="col-lg-12">
      <div class="input-group"><br>
  
  <input type="text" class="form-control" placeholder="Precio $" required name="product_price"style="font-size:1.0em;">
</div>    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" style="font-size:1.0em">Imagen</label>
    <div class="col-lg-12">

      <input type="file" name="product_image" >
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"style="font-size:1.0em">Unidad</label>
    <div class="col-lg-12">

<label>** Si aplica seleccione</label>
<select name="unit_id" class="form-control">
<option value=""  style="font-size:1.2em;">-- SELECCIONE UNIDAD --</option>


<option value="Unidad">UNIDAD</option>
<option value="Unidad">KIT</option>
<option value="Unidad">CAJA</option>

</select>


    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"style="font-size:1.0em">Categoria</label>
    <div class="col-lg-12">














<select name="category_id" class="form-control" required>

<option value="" style="font-size:1.2em;">-- SELECCIONE CATEGORIA --</option>
<?php
$query = $this->db->query("SELECT cat_title,cat_id FROM categories ");
foreach ($query->result() as $row)
{
?> 
<option value="">&nbsp;<?php echo  $row->cat_id ?>.&nbsp;&nbsp;&nbsp;<?php echo  $row->cat_title ?></option>
<?php } ?>
</select>
















    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" style="font-size:1.0em">Palabra Clave</label>
    <div class="col-lg-12">
      <div class="input-group">
 
  <input type="text" class="form-control" placeholder="Palabra clave" required name="product_keywords"style="font-size:1.0em;">
</div>    </div>
  </div>
<br>
  
 <div class="col-lg-12" style="margin-left: 45%"><br>
      <button type="submit" class="btn btn-primary btn-block"style="width: 160px;margin-right: 400px;">Agregar Producto</button>
   <br>
      <button type="reset" class="btn btn-primary btn-block"style="width: 160px;margin-right: 400px;">Limpiar campos</button>
   </div>
  
 
</form>
                  
                </div>
              </div>
            </div>

          </div>

<br>

</body>
</htm>


       




