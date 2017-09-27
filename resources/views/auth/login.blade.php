@extends('auth.layout')

@section('contenido')

<div id="login-page">
        <div class="container">
            {!! Form::open(['class'=>'form-login','method'=>'POST']) !!}
             {{ csrf_field() }}
                <h2 class="form-login-heading"> Inicia Sesion </h2>
                <div class="login-wrap">
                    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                       @endif
                      </div>
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
                    @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                    @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Olvidaste tu Contraseña?</a>
                        </span>
                    </label>
                    </div>
                    {!!Form::submit('Iniciar Sesion!',['class'=>'btn btn-theme btn-block'])!!}
                    <hr>
                    <div class="registration">
                        ¿ No tienes una cuenta ?<br/>
                        <a class="" href="">
                           Crear Cuenta
                        </a>
                    </div>
                </div>
            {!! Form::close() !!}    
                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                            {!! Form::open(['method'=>'POST']) !!}
                                {{ csrf_field() }}
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Olvidaste tu Contraseña ?</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Escribe tu correo electronico y te enviaremos un mensaje para reiniciar la contraseña.</p>
                                  <input type="email" name="email" placeholder="Correo" autocomplete="off" class="form-control placeholder-no-fix" value="{{ old('email') }}">
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                  <button class="btn btn-theme" type="submit">Enviar</button>
                              </div>
                              {!!Form::close()!!}
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        </div>
      </div>
@stop