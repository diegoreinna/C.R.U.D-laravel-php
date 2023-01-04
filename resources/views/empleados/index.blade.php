@extends('empleados.layout')

@section('content')

  <nav class="navbar navbar-dark bg-dark shadow">
    <span class="navbar-brand mb-0 h1">Laravel 9 - C.R.U.D</span>

  </nav>

    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <a class="btn btn-success" href="{{ route('empleados.create') }}">nuevo empleado</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" id="tabla_empleados">
        <tr>
            <th>Cantidad</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>dni</th>
            <th>fnacim</th>
            <th>f_ingreso</th>
            <th>antiguedad</th>
            <th>correo</th>
            <th>direccion</th>
            <th>telefono</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->dni }}</td>
            <td>{{ $empleado->fnacim }}</td>
            <td>{{ $empleado->f_ingreso }}</td>
            <td>{{ $empleado->antiguedad }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>{{ $empleado->direccion }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>
                <form class="container" action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('empleados.show',$empleado->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('empleados.edit',$empleado->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $empleados->links() !!}

@endsection