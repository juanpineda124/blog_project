@extends('layouts.app')

@section('content')
<div class="container">
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
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
                <a href="{{ route('categories.create') }}" class="btn btn-secondary my-3">Crear categoria</a>
                <a href="{{ route('home') }}" class="btn btn-secondary mx-5">Home</a>
        </tbody>
    </table>
</div>
@endsection
