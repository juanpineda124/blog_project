@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Detalle de la Categoria</h3>

    <div class="card">
        <div class="card-body">
            {{ $category->id }}
            {{ $category->category_name }}
            @if ($category->active)
                Activa 
            @else
                Inactiva
            @endif
        </div>
        <a class="btn btn-primary mb-3" href="{{ route('categories.edit', $category->id) }}">Editar</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mb-3">Eliminar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mx-5 mb-3">Index</a>
        </form>
        
    </div>
</div>
@endsection