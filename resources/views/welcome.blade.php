@extends('layouts.app')

@section('content')
  <h1>Ingresa a la vista deseada</h1>
  <a href="{{ route('categories.create') }}" class="btn btn-light">Ingresar a la vista crear</a>
  <a href="{{ route('categories.index') }}" class="btn btn-light">Ingresar a la vista index</a>
@endsection