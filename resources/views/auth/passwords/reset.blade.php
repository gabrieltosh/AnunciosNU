@extends('usuario.layout')
@section('contenido')
<div id="login-page">
        <div class="container">
            {!! Form::open(['route' => 'password.request','class'=>'form-login','files'=>true]) !!}
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <h2 class="form-login-heading">Modificar Contraseña</h2>
                    <div class="login-wrap">
                        {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
                        <br>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        <br>
                        </div>
                        {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Repita la Contraseña', 'id'=>'password-confirm'])!!}
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        <br>
                        {!!Form::submit('Guardar!',['class'=>'btn btn-theme btn-block'])!!}
                    </div>
             {!! Form::close() !!}          
        </div>
      </div>
@stop