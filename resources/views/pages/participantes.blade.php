@include('componentes.head')
@include('componentes.menu')
<div class="container" >
    <div class="container text-center" >
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#newParticipante" href="#">Participante Nuevo</a></button>
        <button class="btn btn-info" style="background-color: white; border: white">
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..."></button>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col"># de Boleto</th>
        <th scope="col">Nombre Completo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Estado</th>
        <th scope="col">Carrera</th>
        <th scope="col"># de Recibo</th>
        <th scope="col"> Imagen</th>
    </tr>
    </thead>
    <tbody id="myTable">
        @foreach($participantes as $item)
            <tr>
                <td>{{$item->num_boleto}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->email}}</td>
                @if($item->estado == 1)
                    <td><span class="badge badge-success">Participo</span></td>
                @else
                    <td><span class="badge badge-danger">No Participo</span></td>
                @endif
                <td>{{$item->nombre_facultad}}</td>
                <td>{{$item->num_recibo}}</td>
                <td>
                    <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                                     data-id="{{$item->id}}"
                                                     data-nombre{{$item->nombre}}
                                                     data-target="#imagen" href="#">Agregar Imagen</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="newParticipante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.Participantes')
</div>
<div class="modal fade" id="imagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.imagenes')
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