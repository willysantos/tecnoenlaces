<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Busca tu nombre o correo electronico...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
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
                    <th scope="col"># de Boleto</th>
                    <th scope="col"># de Recibo</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Accion</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @foreach($asistencia as $item)
                    <tr>
                        <td>{{$item->num_boleto}}</td>
                        <td>{{$item->num_recibo}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>

                                <a href="" data-toggle="modal" data-target="#confirmacion" class="btn btn-success"
                                    data-id="{{$item->id}}"
                                    data-correo="{{$item->email}}"
                                    data-nombre="{{$item->nombre}}">
                                    <i data-feather="plus"></i>
                                </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.confirmacion')
</div>
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
<script>
    feather.replace()
</script>