<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona el premio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @include('rifas.array')
        <div class="modal-body">
            <div class="container">
                <div class="container text-center" >
                    <button class="btn btn-info" style="background-color: white; border: white">
                        <input class="form-control" id="myInput" type="text" placeholder="Buscar..."></button>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Patrocinador</th>
                    <th scope="col">Premio</th>
                    <th scope="col">Accion</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @foreach($premios as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>
                            <a target="_blank" data-toggle="modal" data-target="#ganador" class="btn btn-success"
                               data-id="{{$item->id}}"
                                data-nombre="{{$item->descripcion}}">
                            <i data-feather="arrow-right"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="ganador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('modals.ganador')
    </div>
    <script>
        feather.replace()
    </script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</div>