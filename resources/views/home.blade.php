@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #d9d9d9;">
                <div class="card-header">{{ __('Panel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center"><b>{{ __('Bienvenido') }}</b></h1>
                </div>

                <div class="form-group">
                    <h3 class="text-center">Ingresa a la vista que deseas</h3>
                    <!-- Agregue un contenedor para aplicar el margen -->
                    <div class="mx-4"> 
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <img src="{{ asset('images/crear.png') }}" class="card-img-top" alt="imagen vista crear">
                                    <div class="card-header">
                                        Crear categoría
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ingresa para crear y guardar la categoría deseada.</p>
                                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Ingresar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <img src="{{ asset('images/index.png') }}" class="card-img-top" alt="imagen vista index">
                                    <div class="card-header">
                                        Lista de categorías
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ingresa y visualiza las categorías creadas.</p>
                                        <a href="{{ route('categories.index') }}" class="btn btn-primary">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <img src="{{ asset('images/pcrear.png') }}" class="card-img-top" alt="imagen vista post crear">
                                    <div class="card-header">
                                        Crear publicación
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ingresa y crea una publicación en la categoría deseada.</p>
                                        <a href="{{ route('posts.create') }}" class="btn btn-primary">Ingresar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <img src="{{ asset('images/pindex.png') }}" class="card-img-top" alt="imagen vista post crear">
                                    <div class="card-header">
                                        Lista de publicaciones
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ingresa y visualiza la lista de publicaciones en las diferentes categorías.</p>
                                        <a href="{{ route('posts.index') }}" class="btn btn-primary">Ingresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection