<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_usuario') }}
            {{ Form::text('nombre_usuario', $usuario->nombre_usuario, ['class' => 'form-control' . ($errors->has('nombre_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Usuario']) }}
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrasena') }}
            {{ Form::text('contrasena', $usuario->contrasena, ['class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Contrasena']) }}
            {!! $errors->first('contrasena', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_acceso') }}
            {{ Form::text('nivel_acceso', $usuario->nivel_acceso, ['class' => 'form-control' . ($errors->has('nivel_acceso') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Acceso']) }}
            {!! $errors->first('nivel_acceso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>