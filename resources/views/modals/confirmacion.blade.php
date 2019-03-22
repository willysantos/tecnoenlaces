
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmacion de datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('confirmacion')}}" method="post">
                <div class="form-group" >
                    <label for="recipient-name" class="col-form-label">Nombre Completo</label>
                    <input type="hidden" class="form-control"  name="id" readonly required id="id">
                    <input type="text" class="form-control" name="nombre" disabled required id="nombre">
                    <input type="hidden" class="form-control" name="estado" readonly required id="estado" value="1">
                    <input type="hidden" class="form-control" name="premio" readonly required id="premio" value="0">
                    <input type="hidden" class="form-control" name="presencia" readonly required id="presencia" value="1">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Confirmacion del correo electronico</label>
                    <input type="text" class="form-control" name="correo" required id="correo">
                </div>
                <div class="modal-footer">
                    <input type="submit" class=" btn btn-primary" value="Confirmar Asistencia">
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>

<script>
    $('#confirmacion').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var nombre = button.data('nombre');
        var id = button.data('id');
        var correo = button.data('correo');
        var modal = $(this);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #correo').val(correo)
    })
</script>