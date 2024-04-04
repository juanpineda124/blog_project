@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                        <div class="card mx-2 my-5" style="width: 18rem;">
                            <img src="{{ asset('images/crear.jpg') }}" class="card-img-top" alt="imagen vista crear">
                            <div class="card-header">
                                Vista crear
                            </div>
                            <div class="card-body">
                                <p class="card-text">Ingresa a la vista crear en la cual vas a poder crear y guardar la categoria deseada.</p>
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">Ingresar</a>
                            </div>
                        </div>

                        <div class="card mx-2 my-5" style="width: 18rem;">
                            <img src="{{ asset('images/index.jpg') }}" class="card-img-top" alt="imagen vista index">
                            <div class="card-header">
                                Vista index
                            </div>
                            <div class="card-body">
                                <p class="card-text">Ingresa a la vista index en la cual vas a poder visualizar las categorias creadas.</p>
                                <a href="{{ route('categories.index') }}" class="btn btn-primary">Ingresar</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
