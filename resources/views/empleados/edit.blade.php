@extends('empleados.layout')
   
@section('content')
<nav class="navbar navbar-dark bg-dark shadow">
    <span class="navbar-brand mb-0 h1">Laravel 9 - C.R.U.D</span>
  </nav>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar empelado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Atras</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>oops!</strong> Te falto completar un input<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('empleados.update',$empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nombre"></label>
                    <input type="text" value="{{ $empleado->nombre }}" class="form-control" name="nombre" id="nombre" aria-describedby="nombre"
                        placeholder="Nombre">
                    <small id="nombre" class="form-text text-muted">Nombre</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="apellido"></label>
                    <input type="text" value="{{ $empleado->apellido }}" class="form-control col-5" name="apellido" id="apellido"
                        aria-describedby="apellido" placeholder="Apellido">
                    <small id="apellido" class="form-text text-muted">Apellido</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="dni"></label>
                    <input type="text" value="{{ $empleado->dni }}" class="form-control col-5" name="dni" id="dni"
                        aria-describedby="dni" placeholder="dni">
                    <small id="dni" class="form-text text-muted">dni</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fnacim"></label>
                    <input type="text" value="{{ $empleado->fnacim }}" class="form-control" name="fnacim" id="fnacim"
                        aria-describedby="fnacim" placeholder="fnacim">
                    <small id="fnacim" class="form-text text-muted">Fecha de nacimiento</small>
                </div>
            </div>
        </div>
        <div clasS="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="antiguedad"></label>
                    <input type="text" value="{{ $empleado->antiguedad }}" class="form-control" name="antiguedad" id="antiguedad"
                        aria-describedby="antiguedad" placeholder="antiguedad">
                    <small id="antiguedad" class="form-text text-muted">Antiguedad</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="f_ingreso"></label>
                    <input type="text" value="{{ $empleado->f_ingreso}}" class="form-control" name="f_ingreso" id="f_ingreso" aria-describedby="f_ingreso"
                        placeholder="Fecha de ingreso">
                    <small id="fingreso" class="form-text text-muted">Fecha de ingreso</small>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="telefono"></label>
                    <input type="text" value="{{ $empleado->telefono }}" class="form-control" name="telefono"  placeholder="Telefono">
                    <small id="telefono" class="form-text text-muted">Telefono</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="correo"></label>
                    <input type="text" value="{{ $empleado->correo }}" class="form-control" name="correo" id="correo" aria-describedby="correo"
                        placeholder="correo">
                    <small id="correo" class="form-text text-muted">correo</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="direccion"></label>
                    <input type="text" value="{{ $empleado->direccion }}" class="form-control" name="direccion" id="direccion" aria-describedby="direccion"
                        placeholder="direccion">
                    <small id="direccion" class="form-text text-muted">direccion</small>
                </div>
            </div>
        </div>
        <div class="botones col mt-4">
            <button type="submit" class="btn btn-primary">Editar</button>
            <input id="" class="btn btn-danger" type="reset" value="Borrar todo">
        </div>
    
    </div>
   
    </form>
@endsection