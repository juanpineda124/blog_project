@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Editar publicación</h3>
    <form action="{{ route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3
        @error('post_title')
            has-error
        @enderror">
            <label for="post_title">Titulo</label>
            <input type="text" name="post_title" id="post_title" class="form-control"
                value="{{ $post->post_title}}">
            @error('post_title')
                <span class="help-block">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="post_content">Contenido</label>
            <textarea name="post_content" id="post_content" class="form-control" >
                {{ $post->post_content }}
            </textarea>
            @error('post_content')
                <span class="help-block">{{ $message }}</span>
            @enderror
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