@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? __("Show Venta") }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show Venta') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $venta->producto->nombre }} <!-- Reemplaza 'nombre' con el nombre de la columna que almacena el nombre del producto en tu tabla -->
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $venta->usuario->nombre_usuario }} <!-- Reemplaza 'name' con el nombre de la columna que almacena el nombre del usuario en tu tabla -->
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $venta->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $venta->fecha_venta }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
