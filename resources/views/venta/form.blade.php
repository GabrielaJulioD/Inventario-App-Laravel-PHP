<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_producto', 'Producto') }}
            {{ Form::select('id_producto', $productos, $venta->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('id_usuario', 'Usuario') }}
            {{ Form::select('id_usuario', $usuarios, $venta->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('cantidad', 'Cantidad') }}
            {{ Form::text('cantidad', $venta->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('fecha_venta', 'Fecha Venta') }}
            {{ Form::date('fecha_venta', $venta->fecha_venta, ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
            {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
