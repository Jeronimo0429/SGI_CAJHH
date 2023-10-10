@extends('layout.plantilla')
@section('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
    <h4>Ingresar Persona</h4>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

{!!Form::open(array('url'=>'usuario','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}

<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">

            <label for="documento_identidad">Numero Documento</label>
            <input type="number" name="documento_identidad"
id="documento_identidad" class="form-control"
                placeholder="Digite el número Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" class="form-control"
placeholder="Nombre Completo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
        <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control"
placeholder="Apellidos Completos">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
        <label for="correo">Email</label>
        <input type="text" name="correo" id="correo" class="form-control"
placeholder="Correo Electrónico">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" id="telefono" class="form-control"
placeholder="Telefono">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span
class="glyphicon glyphicon-ok"></span> Guardar</button>
        <button class="btn btn-danger" type="reset"><span
class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
        <a class="btn btn-info" type="reset" href="{{url('usuario')}}">
<span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>

{!!Form::close()!!}
@endsection