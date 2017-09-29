<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Una Oportunidad</title>

    @include('anuncio.styles.css.css')

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	@include('anuncio.partes.menu')
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		@include('anuncio.partes.slider')
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			@yield('contenido')
		</div>
	</section>

	@include('anuncio.partes.footer')

	@include('anuncio.styles.js.js')

 </body>
 </html>