@include('componentes.head')
@include('componentes.menu')
<div class="container">
    <div class="container text-center" >
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#nuevaRifa">Nueva Rifa</a></button>
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#pendientes">Participantes Pendientes</a></button>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nombre Completo</th>
        <th scope="col"># de Boleto</th>
        <th scope="col">Premio</th>
    </tr>
    </thead>
    <tbody>
    @foreach($index as $item)
        <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->num_boleto}}</td>
            <td>{{$item->descripcion}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="modal fade" id="nuevaRifa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.nuevaRifa')
</div><div class="modal fade" id="pendientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.pendiente')
</div>
