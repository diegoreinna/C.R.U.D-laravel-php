@extends('empleados.layout')
  
@section('content')
<nav class="navbar navbar-dark bg-dark shadow">
    <span class="navbar-brand mb-0 h1">Laravel 9 - C.R.U.D</span>
  </nav>

    <div class="row mt-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-secondary" href="{{ route('empleados.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="">
                <tr  class="bg-primary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Correo E.</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">F. de nacimiento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">F. de ingreso</th>
                    <th scope="col">Antiguedad</th>
                    <th scope="col">Mes/Año</th> 
                    
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->dni }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->direccion }}</td>
                    <td>{{ $empleado->fnacim }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->f_ingreso }}</td>
                    <td>{{ $empleado->antiguedad }}</td>
                    
                </tr>

            </tbody>
        </table>
    </div>
    
@endsection