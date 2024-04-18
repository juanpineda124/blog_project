@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="background-color: #d1f7d1;">
        <div class="card-header">
            <h1 class="card-title">{{ $post->title }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{!! html_entity_decode($post->content) !!}</p>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    @if ($post->category)
                        <p><strong>Categoría:</strong> {{ $post->category->category_name }}</p>
                    @else
                        <p><strong>Categoría:</strong> Este post no tiene una categoría asignada.</p>
                    @endif
                </div>
                <div class="col-md-6 text-md-end">
                    <p><strong>Fecha de creación:</strong> {{ $post->created_at }}</p>
                    <p><strong>Fecha de actualización:</strong> {{ $post->updated_at }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start align-items-center">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary me-2">Regresar</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary me-2">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection