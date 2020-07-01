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

<h3>Verificacion de Mensaje</h3><br><br>
        
<div style="width:300px;">
              <div class="panel panel-primary">
                
                <div class="panel-heading">
   <center>

<?php
       

    $message = '';
    if (isset($_POST['message'])) {

        if (empty($_POST['msisdn']) || empty($_POST['message'])) {
            $message = 'All fields need to be filled in';

        } else {
            $url = 'http://api.labsmobile.com/get/send.php?';
            $url .= 'username=&';
            $url .= 'password=';
            $url .= 'msisdn=' . $_POST['msisdn'] . '&';
            $url .= 'message=' . $_POST['message'] . '&';

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $result = curl_exec($ch);
            curl_close($ch);

            $message = htmlentities('Mensaje  enviado.<br />Details:' . "<br />" . $result);
        }
    }
?>

        <p><?php echo $message ?></p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <p>Cel_number: <input type="text" style="color: #000"   value="" name="msisdn" /></p>
            <p>Menssage:&nbsp;&nbsp;&nbsp;    <input type="text" style="color: #000" value="" maxlength="160" name="message" /></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" style="color: #000" value="Enviar SMS" name="send" /></p>
        </form>

</center>


 </body>
</html>

