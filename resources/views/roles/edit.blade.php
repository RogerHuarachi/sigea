<div class="modal fade" id="roleEdit{{ $role->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Rol</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('roles.update', $role->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                  <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Rol" name="name" value="{{ $role->name }}">
                  <br>
                  <div class="form-group">
                      <label>Permisos de Rol</label>
                      <select multiple class="form-control" name="permissions[]">
                          @foreach ($permissions as $permission)
                              <option>{{ $permission->name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
</div>
