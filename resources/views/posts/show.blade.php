@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    @if ($post->category)
            <p>Categoría: {{ $post->category->category_name }}</p>
        @else
            <p>Este post no tiene una categoría asignada.</p>
        @endif
    <p>Fecha de creación: {{ $post->created_at }}</p>
    <p>Fecha de actualización: {{ $post->updated_at }}</p>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Editar</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-3">Eliminar</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mx-5 mb-3">Regresar</a>
    </from>
</div>
@endsection