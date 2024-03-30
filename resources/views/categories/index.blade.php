@extends('layouts.app')

@section('content')
  <h2 class="text-center">Lista De Categorias</h2>
  <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                 <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->category_name}}</td>
                    <td>
                        @if ($category->active)
                            Activa
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary">Editar</a>
                        <a class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
                <a href="{{ route('categories.create') }}" class="btn btn-secondary my-3">Regresar</a>
        </tbody>
    </table>
@endsection
