<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formUsuario" name="formUsuario" class="form-horizontal">
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
              <p class="text-primary">Todos los campos son obligatorios.</p>

              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="txtNombre">Nombres</label>
                  <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="txtApellido">Apellidos</label>
                  <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" required="">
                </div>

              </div>

              <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="listLocacion">Ubicación</label>
                    <select class="form-control selectpicker" id="listLocacionid" name="listLocacionid" required >
                      <option value="Campo">Campo</option>
                      <option value="Oficina Central">Oficina Central</option>
                      <option value="Planta">Planta</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="listArea">Área</label>
                    <select class="form-control" data-live-search="true" id="listAreaid" name="listAreaid" required >
                    </select>
                </div>

              </div>              
              

              <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="listRolid">Cargo</label>
                    <select class="form-control" data-live-search="true" id="listRolid" name="listRolid" required >
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="listStatus">Estatus</label>
                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
                
              </div>

              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="txtEmail">Email</label>
                  <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
                </div>

                <div class="form-group col-md-6">
                  <label for="txtPassword">Password</label>
                  <input type="password" class="form-control" id="txtPassword" name="txtPassword" >
                </div>                

              </div>

              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
              </div>

            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>            

            <tr>
              <td>Nombres:</td>
              <td id="celNombre">--</td>
            </tr>

            <tr>
              <td>Apellidos:</td>
              <td id="celApellido">--</td>
            </tr>            

            <tr>
              <td>Email (Usuario):</td>
              <td id="celEmail">--@--.com</td>
            </tr>

            <tr>
              <td>Password:</td>
              <td id="celPassword">--</td>
            </tr>
            
            <tr>
              <td>Cargo:</td>
              <td id="celTipoUsuario">--</td>
            </tr>

            <tr>
              <td>Área:</td>
              <td id="celAreaUsuario">--</td>
            </tr> 

            <tr>
              <td>Ubicación:</td>
              <td id="celLocacion">--</td>
            </tr>

            <tr>
              <td>Estado:</td>
              <td id="celEstado">--</td>
            </tr>

            <tr>
              <td>Fecha registro:</td>
              <td id="celFechaRegistro">--</td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

