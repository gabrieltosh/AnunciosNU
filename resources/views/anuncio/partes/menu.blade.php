<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">Una Oportunidad</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="{{route('inicio')}}" class="{{ $_SERVER['REQUEST_URI']== '/' ? 'active' : '' }}">Inicio</a></li>
							<li><a href="{{route('contacto')}}" class="{{ $_SERVER['REQUEST_URI']== '/contacto' ? 'active' : '' }}">Contactanos</a></li>
							<li><a href="about.html">Iniciar Session</a></li>              
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>