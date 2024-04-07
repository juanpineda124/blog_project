@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="text-center">Lista De Publicaciones</h5>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear puplicación</a>
  <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>comentario</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                 <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->content}}</td>
                    <td>{{ $post->category_id}}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Eliminar</a>
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