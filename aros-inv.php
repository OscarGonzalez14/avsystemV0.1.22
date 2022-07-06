<?php
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){
require_once('header_dos.php');
require_once('modals/nuevo_aro.php');
require_once('modals/nueva_marca.php');
require_once('modals/editar_aro.php');
?>
<div class="content-wrapper" >
<!--$('[name="country-of-operation-edit[]"]').val()-->
<div style="margin: 1px">
	<div class="callout callout-info">
        <h5 align="center" style="margin:0px"><i class="fas fa-glasses" style="color:green"></i> <strong>MODULO AROS</strong></h5>
        <?php include 'sources-view/nav-bar-aros.php'?>             
    </div>
	
</div>
   

<!-- Modal ubicacion individual-->
<div class="modal" id="ubicacion-ind">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-dark" style="background: #073763 !impoprtant;color:white;padding:10px">        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        ----------------------
      </div>

      </div>
  </div>
</div>


</div><!-- /.wrapper -->
<?php require_once("footer.php"); ?>
<script src='js/bootbox.min.js'></script>
<script src='js/productos.js'></script>
<script src='js/marca.js'></script>
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    $(".select2").select2({
        maximumSelectionLength: 1
    });
  
    })

    function EnterEvent() {
        if (event.keyCode == 13) {
            guardarMarca();
        }
    }
    window.onkeydown = EnterEvent;
</script>
<?php } else{
  echo "Acceso no permitido";
  header("Location:index.php");
        exit();
  } ?>