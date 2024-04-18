@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="text-center"><b>Lista De Publicaciones</b></h5>
  <a href="{{ route('posts.create') }}" class="btn btn-secondary mb-3">Crear publicación</a>
  <a href="{{ route('home') }}" class="btn btn-secondary mb-3 mx-5">Home</a>
  <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Comentario</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                 <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{!! html_entity_decode($post->content) !!}</td>
                    <td>@if ($post->category)
                        <p>{{ $post->category->category_name }}</p>
                    @else
                        <p>Este post no tiene una categoría asignada.</p>
                    @endif</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method='POST' style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection