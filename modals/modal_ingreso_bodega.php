<style>
.modal-header{
  background-color:black;
  color:white;
}


/*.modal-body{
  overflow-y: auto;
}*/

</style>

<!-- The Modal -->
  <div id="modal_ingreso_bodega" class="modal fade" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog" style="max-width:95%">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <span class="modal-title"><strong> Ingresar Productos a Bodega</strong></span>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <button type="button" class="btn btn-sm btn-outline-secondary btn-flat" data-toggle="modal" data-target="#nuevo_aro" data-backdrop="static" data-keyboard="false" onClick="cargar_marca()"><i class="fas fa-plus"></i> Nuevo Aro</button>

        <div class="row">
          <div class="col-sm-3 select2-primary">
            <label for="sel1">Seleccionar aro:</label>
            <select class="form-control select2" name="" id="aros-list" multiple="multiple"
                 data-dropdown-css-class="select2-purple" clear_i></select>
           </div>
          <div class="col-sm-3">

          </div>
          <div class="col-sm-3">

          </div>
        </div>
        <!--SELECT MULTIPLE
                <div class="form-group">
                  <label>Seleccionar aros</label>
                  <select class="duallistbox form-control input-medium" multiple="multiple"  size="5" name="country-of-operation-edit[]" id="lista-aros-sel" style="border-bottom: 1px solid #efefef;">
                    <option>Alabama</option>
                    <option value="Alaska"><input type="text"></option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                    <option value="1">c01 * 1258 * rayban</option>
                    <option value="1">c02 * 1258 * Lacoste</option>
                  </select>
                </div>-->
                <!-- /.form-group -->


        <!--FIN SELECT MULTIPLE-->

        </div>               
      </div>
    </div>
    
  </div>
