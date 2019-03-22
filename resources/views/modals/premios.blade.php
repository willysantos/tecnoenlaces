<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingreso de un Nuevo Premio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('savePremio')}}" method="post">
                <div class="form-group" >
                    <label for="recipient-name" class="col-form-label">Nombre del Patrocinador</label>
                    <input type="hidden" class="form-control"  name="id" readonly required id="id" value="">
                    <input type="text" class="form-control" name="patrocinador" disabled required id="patrocinador">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" required id="descripcion">
                    <input type="hidden" class="form-control" name="estado" required id="estado" value="1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class=" btn btn-primary" value="Guardar Premio">
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
<script>
    $('#newPremio').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var nombre = button.data('nombre');
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-body #patrocinador').val(nombre);
        modal.find('.modal-body #id').val(id);
    })
</script>