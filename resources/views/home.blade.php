@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido') }}
                </div>

                <div class="form-group">
                    <h1 class="text-center">Ingresa a la vista que deseas</h1>
                    <div class="mb-3 mx-2">
                         <a href="{{ route('categories.create') }}" class="btn btn-info btn-lg">Ingresar a la vista crear</a>
                    </div>

                    <div class="mb-3 mx-2">
                        <a href="{{ route('categories.index') }}" class="btn btn-info btn-lg my-5">Ingresar a la vista index</a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
