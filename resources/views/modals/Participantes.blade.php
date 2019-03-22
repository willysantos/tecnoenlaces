<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingreso de Nuevo Participante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('saveparticipante')}}" method="post">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"># de Boleto</label>
                    <input type="text" class="form-control" name="boleto" required id="boleto">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" required id="nombre">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Telefono</label>
                    <input type="text" class="form-control" required id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Correo Electronico</label>
                    <input type="email" required class="form-control"  name="email">
                </div>
                <div class="form-group">
                    <input type="hidden" required  class="form-control"  name="estado" value="0">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Carrera</label>
                    <select multiple class="form-control" required name="select_facultad" id="select_facultad">
                        @foreach($facultad as $item)
                            <option value="{{$item->id_facultad}}">{{$item->nombre_facultad}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"># de Recibo</label>
                    <input type="text" required class="form-control"  name="recibo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class=" btn btn-primary" value="Guardar Participante">
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>