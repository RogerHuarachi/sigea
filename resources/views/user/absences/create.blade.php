<div class="modal fade" id="absenceCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('vacations.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="my-input">Fecha de Vacación</label>
                            <input id="my-input" class="form-control" type="date" name="date" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
