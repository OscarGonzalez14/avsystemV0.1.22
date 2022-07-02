<?php
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
require_once('header_dos.php');
require_once('modals/nuevo_aro.php');
require_once('modals/nueva_marca.php');
require_once('modals/editar_aro.php');
?>
<div class="content-wrapper" >

<div style="margin: 1px">
	<div class="callout callout-info">
        <h5 align="center" style="margin:0px"><i class="fas fa-glasses" style="color:green"></i> <strong>MODULO AROS</strong></h5>
        <?php include 'sources-view/nav-bar-aros.php'?>             
    </div>
	
</div>
    
</div><!-- /.wrapper -->
<?php require_once("footer.php"); ?>
<script src='js/bootbox.min.js'></script>
<script src='js/productos.js'></script>
<script src='js/marca.js'></script>
<?php } else{
  echo "Acceso no permitido";
  header("Location:index.php");
        exit();
  } ?>