<?php 
require_once("config/conexion.php");
if(isset($_SESSION["usuario"])){ 
  require_once('header_dos.php');
  require_once('modals/modal_detalle_orden.php');
  require_once("modals/modal_correlativo_factura.php");

  $cat_user = $_SESSION["categoria"];
  require_once("modelos/Reporteria.php");
  $reporteria = new Reporteria();
  ?>

  <style type="text/css">
    .dataTables_filter {
     float: right !important;
     width: 100%;
   }
 </style>

 <div  class="content-wrapper">
  <input type="hidden" name="cat_user" id="cat_user" value="<?php echo $cat_user;?>"/>

  <section class="content-header" >
    <div class="container-fluid">
      <div class="row mb-2" style="margin: 2px">
        <div class="col-sm-9">
          <h5 align="center"><strong><i class="fas fa-list" style="color:green"></i>&nbsp; CARGOS AUTOMATICOS APROBADOS</strong></h5>
        </div>
        <div class="col-sm-3">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="cargos_pend.php">Cargos Pendientes</a></li>
            <li class="breadcrumb-item active">Cargos Aprobados</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <section class="content" style="margin-top: 5px"><!-- Main content -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body"><!--CONTENIDO-->

            <section class="content">
              <div class="container-fluid"><!--INICIO DE CONTENIDO-->
                <table id="cargos_aprobados" width="100%" data-order='[[ 0, "desc" ]]' class="table-hover table-bordered">
            <thead style="color:white;font-family: Helvetica, Arial, sans-serif;font-size: 12px;text-align: center" class="bg-info">
                   <tr>
                     <td>ID</td>
                     <td># Orden</td>
                     <td>Titular</td>
                     <td>Fecha creación</td>
                     <td>Sucursal</td>
                     <td>Asesor</td>
                     <td>Estado</td>
                     <td>Acciones</td>
                   </tr>
                 </thead>
                 <tbody style="text-align: center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;">
                 </table> 
               </div><!--FIN INICIO DE CONTENIDO-->
             </section>
           </div></div></div></div>
         </section>

         <input type="hidden" name="sucursal" id="sucursal" value="<?php echo $_SESSION["sucursal"];?>"/>
         <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION["usuario"];?>"/>
         <input type="hidden" name="sucursal_usuario" id="sucursal_usuario" value="<?php echo $_SESSION["sucursal_usuario"];?>"/>
         <?php date_default_timezone_set('America/El_Salvador'); $hoy = date("d-m-Y H:i:s");?>
         <input type="hidden" id="fecha" value="<?php echo $hoy;?>">          
         
         <?php require_once("footer.php"); ?>
         <input type="hidden" id="name_pag" value="CARGOS APROBADOS">
         <script type="text/javascript" src="js/creditos.js"></script>
         <script type="text/javascript" src="js/bootbox.min.js"></script>
         <script type="text/javascript">
          var title = document.getElementById("name_pag").value;
          document.getElementById("title_mod").innerHTML=" "+ title;
        </script>
      </div>
      
    <?php } else{
      echo "Acceso no permitido";
      header("Location:index.php");
      exit();
    } ?>