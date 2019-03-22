<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingreso de Nuevo Participante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('savePremio2')}}" method="post">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Seleccione Patrocinador</label>
                    <select multiple class="form-control" required name="id" id="select_patrocinador">
                        @foreach($patrocinadores as $item)
                            <option value="{{$item->id_patrocinador}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Descripcion del Premio</label>
                    <input type="text" required class="form-control"  name="descripcion">
                </div><div class="form-group">
                    <input type="hidden" required class="form-control"  name="estado" value="1">
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