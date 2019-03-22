<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingreso de Nuevo Patrocinador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('savePatrocinador')}}" method="post">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required id="nombre">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" required id="telefono">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class=" btn btn-primary" value="Guardar Patrocinador">
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>