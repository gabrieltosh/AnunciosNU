@extends('anuncio.layout')
	@section('contenido')
	@foreach($clases as $clase) 
		@if($clase->id == 3)
			<a href="{{route('inicio')}}">
				<div class="col-lg-4 col-md-4 col-sm-6" id="more">
					<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
						<img src="{{asset('../img')}}/{{$clase->imagen}}" alt="image" class="img-responsive">
							<div class="tm-yellow-gradient-bg tm-city-price-container">
								<span>{{$clase->nombre}}</span>
							</div>			
					</div>			
				</div>
			</a>
		@else
			<a href="#">
				<div class="col-lg-4 col-md-4 col-sm-6" id="more">
					<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
						<img src="{{asset('../img')}}/{{$clase->imagen}}" alt="image" class="img-responsive">
							<div class="tm-yellow-gradient-bg tm-city-price-container">
								<span>{{$clase->nombre}}</span>
							</div>			
					</div>			
				</div>
			</a>
		@endif
	@endforeach
	@stop