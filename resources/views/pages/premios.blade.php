@include('componentes.head')
@include('componentes.menu')
<div class="container">
    <div class="container text-center" >
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#newPremio" href="#">Nuevo Premio</a></button>
        <button class="btn btn-info" style="background-color: white; border: white">
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..."></button>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nombre del Patrocinador</th>
        <th scope="col">Descripcion del Premio</th>
        <th scope="col">Estado del Premio</th>
    </tr>
    </thead>
    <tbody id="myTable">
    @foreach($premios as $item)
    <tr>
        <td>{{$item->nombre}}</td>
        <td>{{$item->descripcion}}</td>
        @if($item->estado == 1)
        <td><span class="badge badge-success">Disponible</span></td>
        @else
        <td><span class="badge badge-danger">No Disponible</span></td>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>

<div class="modal fade" id="newPremio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.newPremio')
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