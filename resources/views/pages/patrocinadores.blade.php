@include('componentes.head')
@include('componentes.menu')
<div class="container">
    <div class="container text-center" >
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#newPatrocinador" href="#">Patrocinador Nuevo</a></button>
        <button class="btn btn-info" style="background-color: white; border: white">
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..."></button>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre Patrocinador</th>
        <th scope="col">Telefono</th>
        <th scope="col">Añadir Accion</th>
    </tr>
    </thead>
    <tbody id="myTable">
        @foreach($patrocinadores as $item)
        <tr>
            <td>{{$item->id_patrocinador}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->telefono}}</td>
            <td>
                <button  class="btn btn-dark"><a style="color:white; text-decoration:none" data-toggle="modal" data-target="#newPremio"
                    data-nombre="{{$item->nombre}}"
                    data-id="{{$item->id_patrocinador}}">Añadir Premio</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="newPatrocinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.Patrocinadores')
</div>
<div class="modal fade" id="newPremio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.premios')
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