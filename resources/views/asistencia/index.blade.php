@include('componentes.head')
@include('componentes.menu')
<div class="container">
    <div class="container text-center" >
        <button  class="btn btn-info"><a style="color:white; text-decoration:none" data-toggle="modal"
                                         data-target="#Asistencia">Añadir Asistencia</a></button>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nombre Completo</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col">Estado de Asistencia</th>
        <th scope="col">Estado de Premio</th>
        <th scope="col">Presencia en el Congreso</th>
    </tr>
    </thead>
    <tbody >
    @foreach($asis as $item)
        <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->email}}</td>
            @if($item->estado == 1)
                <td><span class="badge badge-success">Participo</span></td>
            @else
                <td><span class="badge badge-danger">No Participo</span></td>
            @endif
            @if($item->premio == 1)
                <td><span class="badge badge-success">Gano</span></td>
            @else
                <td><span class="badge badge-danger">No Gano</span></td>
            @endif
            @if($item->ausente == 1)
                <td>
                    <button class="btn btn-success"><a style="color:white; text-decoration:none" data-toggle="modal"
                                                     data-target="#Asiste">
                            <span class="badge badge-success">Presente</span>
                        </a>
                    </button>
                </td>
            @else
                <td>
                    <button class="btn btn-danger"><a style="color:white; text-decoration:none" data-toggle="modal"
                                                       data-target="#Asiste">
                            <span class="badge badge-danger">Ausente</span>
                        </a>
                    </button>
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<div class="modal fade" id="Asistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.Asistencia')
</div>
<div class="modal fade" id="Asiste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('modals.pendiente')
</div>