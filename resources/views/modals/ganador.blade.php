<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">El ganador de : </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" class="text-center">El ganador es</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><h4>{{$participantes->nombre}} con numero de boleto {{$participantes->num_boleto}}</h4></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <form action="{{route('saveRifas')}}" method="post">
            <input type="hidden" class="form-control" readonly name="id_premio" id="id_premio"><!---->
            <input type="hidden" class="form-control" readonly name="premio_asistencia" id="premio" value="1"><!---->
            <input type="hidden" class="form-control" readonly name="estado_premio_premios" id="estado_premio" value="0"><!---->
            <input type="hidden" class="form-control" readonly name="id_participante" id="" value="{{$participantes->id}}"><!---->
            <div class="form-group">
                <div class="modal-footer">
                    <input type="submit" class=" btn btn-primary" value="Guardar Ganador de la Rifa">
                </div>
            </div>
            {{csrf_field()}}
        </form>
    </div>
</div>
<script>
    $('#ganador').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var nombre = button.data('nombre');
        var id = button.data('id');
        var modal = $(this);
        modal.find('.modal-header #exampleModalLabel').html("El ganador de " + nombre);
        modal.find('#id_premio').val(id);

    });

</script>