@extends('layouts.app')

@section('content')
  <h1 class="text-center">Ingresa a la vista deseada</h1>
  <div class="form-group">
    <div class="mb-3">
      <a href="{{ route('categories.create') }}" class="btn btn-info btn-lg">Ingresar a la vista crear</a>
    </div>

    <div class="mb-3">
      <a href="{{ route('categories.index') }}" class="btn btn-info btn-lg my-5">Ingresar a la vista index</a>
    </div>
  </div>
@endsection