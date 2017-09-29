@if($_SERVER['REQUEST_URI']== '/')
<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Encuentra <span class="tm-yellow-text">Las mejores</span></h1>
					<p class="tm-banner-subtitle">Oportunidades de trabajo</p>
					<a href="#more" class="tm-banner-link">Comenzemos</a>	
				</div>
				<img src="img/slider3.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Oportunidades <span class="tm-yellow-text">de Trabajo</span></h1>
					<p class="tm-banner-subtitle">Dirigido a Jovenes y Personas con Discapacidad</p>
					<a href="#more" class="tm-banner-link">Comenzemos</a>	
				</div>
		      <img src="img/slider2.jpg" alt="Image" />
		    </li>
		  </ul>
</div>	
@else
	@if($_SERVER['REQUEST_URI']== '/contacto')
			<div class="flexslider flexslider-banner">
				<ul class="slides">
					<li>
						<div class="tm-banner-inner">
						<h1 class="tm-banner-title">Somos Personas<span class="tm-yellow-text">Intentando</span></h1>
						<p class="tm-banner-subtitle">Ayudar a nuestra Sociedad</p>
					</div>
					<img src="img/slider3.jpg" alt="Image" />	
					</li>
					<li>
						<div class="tm-banner-inner">
						<h1 class="tm-banner-title">Somos Personas<span class="tm-yellow-text">Intentando</span></h1>
						<p class="tm-banner-subtitle">Ayudar a nuestra Sociedad</p>
					</div>
						<img src="img/slider2.jpg" alt="Image" />
					</li>
				</ul>
			</div>	
	@endif
@endif