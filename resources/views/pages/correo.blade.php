@include('componentes.head')
<form id="login-form" class="form" action="{{route('mail.store')}}" method="post">
    <div class="form-group">
        <label for="correo" class="text-info">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="correo" class="text-info">Correo</label><br>
        <input type="text" name="correo" id="correo" class="form-control">
    </div>
    <div class="form-group ">
        <label for="mensaje" class="text-info">mesaje</label><br>
        <input type="text" name="mensaje" id="mensaje" class="form-control text-area">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-info btn-md" value="Ingresar">
    </div>
    {{csrf_field()}}
</form>