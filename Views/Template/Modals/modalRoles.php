// Vista que muestra el formulario para agregar o editar un rol
<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" aria-labelledby="modalFormRolLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFormRolLabel">Formulario de Rol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">
            <form id="formRol" name="formRol">
              <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del Rol" required>
              </div>
              <div class="mb-3">
                <label for="txtDescripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción del Rol" required></textarea>
              </div>
              <div class="mb-3">
                <label for="listStatus" class="form-label">Estado</label>
                <select class="form-control" id="listStatus" name="listStatus" required>
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
              </div>
              <div class="d-flex justify-content-between">
                <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

