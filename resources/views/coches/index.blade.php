@extends('plantillas.plantilla')
@section('titulo')
Coches
@endsection
@section('cabecera')
Coches Disponibles
@endsection
@section('contenido')
@if($texto=Session::get('mensaje'))
<p class="alert alert-success my-3">{{$texto}}</p>
@endif
<a href="{{route('coches.create')}}" class="btn btn-success mb-3">Guardar Coche</a>
<table class="table table-striped table-dark mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Matricula</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Tipo</th>
        
        <th scope="col">Kilometros</th>
        <th scope="col text-center">Foto</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($coches as $coche)
      <tr>
        <th scope="row" class="align-middle">
        <a href="{{route('coches.show', $coche)}}" class="btn btn-info">Detalles</a>
        </th>
    <td class="align-middle">{{$coche->matricula}}</td>
    <td class="align-middle">{{$coche->marca->nombre}}</td>
    <td class="align-middle">{{$coche->modelo}}</td>
    <td class="align-middle">{{$coche->tipo}}</td>
    
    <td class="align-middle">{{$coche->klms}}</td>
    <td>
        <img src="{{asset($coche->foto)}}" width="90px" height='90px' class="rounded-circle">
        </td>
    <td class="align-middle" style="white-space: nowrap">
    <form name="borrar" method='post' action='{{route('coches.destroy', $coche)}}'>
      @csrf
      @method('DELETE')
      <a href='{{route('coches.edit', $coche)}}' class="btn btn-warning">Editar</a>
      <button type='submit' class="btn btn-danger" onclick="return confirm('¿Borrar Coche?')">
        Borrar</button>
    </form>
    </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  {{$coches->links()}}
@endsection