<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="{{asset('../imagenes/favicon.ico')}}">
    <title>{{config('app.name')}}</title>

    @include('auth.styles.css')

  </head>
  <body>

    @yield('contenido')
	  
    @if (session('status'))
        @include('auth.alerts.message')
    @endif  

    @include('auth.styles.js')
  </body>
  
</html>
