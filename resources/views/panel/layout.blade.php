<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="shortcut icon" href="{{asset('../imagenes/ico.ico')}}">
        <title>Plataforma</title>
            @include('panel.styles.css.css')
    </head>
    <body>
        <section id="container" >
            @include('panel.partes.nav')
            @include('panel.partes.menu')
            <section id="main-content">
                <section class="wrapper">
                    @yield('contenido')
                </section>
            </section>
            @include('panel.partes.footer')
        </section>
            @include('panel.styles.js.js')
    </body>
</html>
