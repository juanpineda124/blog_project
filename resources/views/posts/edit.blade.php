@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Editar publicación</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{ route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="category">Categoría:</label>
            <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                    @if($category->id == $post->category_id) selected @endif>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success mb-3" type="submit">Guardar</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mx-5 mb-3">Regresar</a>
    </form>
</div>
@endsection