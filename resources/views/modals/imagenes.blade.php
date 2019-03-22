<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmacion de datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('img')}}" enctype="multipart/form-data" method="post">
                <div class="form-group" >
                    <label for="recipient-name" class="col-form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" readonly required id="nombre">
                    <input type="text" class="form-control"  name="id" readonly required id="id">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file" required id="file">
                </div>
                <div class="modal-footer">
                    <input type="submit" class=" btn btn-primary" value="Guardar Imagen">
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
<script>
    $('#imagen').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var nombre = button.data('nombre');
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #id').val(id);
    })
</script>