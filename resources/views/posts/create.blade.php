@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #d1f7d1;">
                    <div class="card-header text-center"><b>Crear Nueva publicación</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="form-group mb-3" >
                                <label for="title">Título:</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Contenido:</label>
                                <textarea name="content" id="content" rows="5" placeholder="Ingresa el contenido de la publicación"  class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Categoría:</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="" disabled selected>Elige una categoría</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success mb-3">Guardar</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary mx-5 mb-3">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
