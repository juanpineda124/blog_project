@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Titulo:</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Contenido:</label>
                            <textarea name="content" id="content" rows="5" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Categoria:</label>
                            <select name="category" id="category" class="form-control">
                                @foreach
                                    <option value="{{ $category->ig}}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mb-3">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
