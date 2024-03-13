<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?= base_url('css/open-iconic-bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/animate.css')?>">
<link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css')?>">
<link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/ionicons.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/bootstrap-datepicker.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/jquery.timepicker.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/flaticon.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/icomoon.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">

  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 57 3206378733</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Districo@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text"> ENTREGAS DE 3 A 5 DIAS HABILES &amp; DEVOLUCIONES GRATUITAS</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url().'inicio';?>">Districo</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url().'inicio';?>" class="nav-link">Inicio</a></li>
			  <?php if(!session('usuario')): ?>
    <li class="nav-item"><a href="<?php echo base_url().'distribuidora';?>" class="nav-link">Login</a></li> 
<?php endif; ?>

	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo base_url().'productos';?>">productos</a>
                <a class="dropdown-item" href="<?php echo base_url().'prounicos';?>">informacion de productos</a>
                <a class="dropdown-item" href="<?php echo base_url().'carrito';?>">carrito</a>
              </div>
            </li>	          
	          <li class="nav-item"><a href="<?php echo base_url().'sobre';?>" class="nav-link">sobre nosotros</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'contactanos';?>" class="nav-link">contactanos</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?php echo base_url().'carrito';?>" class="nav-link"><span class="icon-shopping_cart">[0]</span></a></li>
			  <li class="nav-item dropdown">
          <?php if(session('usuario')): ?>
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo " Hola ".session('usuario');?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo base_url().'cerrar_sesion';?>">Cerrar sesion</a>
              </div>
            </li>	
			 <?php endif; ?>
				
	        </ul>
	      </div>
	    </div>
	  </nav>

    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">Sobre Nosotros</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Bienvenidos a Districo</h2>
	            </div>
	          </div>
            <div class="pb-md-5">
    <p>Districo es la mejor distribuidora. Ven y disfruta de productos de calidad.</p>
    <p>En Districo, nos enorgullece ser tu socio de confianza en la distribución de productos. Desde nuestra fundación, hemos estado comprometidos en ofrecer soluciones de distribución eficientes y servicios excepcionales a nuestros clientes.</p>
    <p><strong>Nuestra Historia</strong></p>
    <p>Comenzamos como un pequeño equipo con una visión clara: facilitar el acceso a productos de alta calidad a través de una red de distribución confiable. A lo largo de los años, hemos crecido y evolucionado, adaptándonos a las cambiantes necesidades del mercado. cada dia somos mas profesionales apasionados que trabajan arduamente para superar las expectativas de nuestros clientes.</p>
    <p><strong>Nuestra Misión</strong></p>
    <p>En Districo, nuestra misión es vender bueno bonito y barato. Nos esforzamos por ofrecer servicios de calidad, y trabajamos incansablemente para contribuir al éxito de nuestros clientes, proveedores y empleados.</p>
    <p><strong>Nuestros Valores</strong></p>
    <ul>
        <li><strong>Compromiso:</strong> Nos comprometemos a ofrecer servicios de distribución excepcionales y construir relaciones duraderas.</li>
        <li><strong>Calidad:</strong> Buscamos la excelencia en todo lo que hacemos, garantizando la calidad de los productos y servicios que proporcionamos.</li>
        <li><strong>Innovación:</strong> Nos mantenemos a la vanguardia de la industria, adoptando nuevas tecnologías y prácticas para mejorar constantemente.</li>
    </ul>
    <p><strong>¿Por qué elegirnos?</strong></p>
    <ul>
        <li><strong>Experiencia:</strong> Con años de experiencia en la industria, somos expertos en la distribución de [tipo de productos].</li>
        <li><strong>Red de Distribución:</strong> Contamos con una extensa red de distribución que nos permite llegar a cada rincón del mercado de manera eficiente.</li>
        <li><strong>Compromiso con la Sostenibilidad:</strong> Nos preocupamos por el medio ambiente y trabajamos para incorporar prácticas sostenibles en nuestras operaciones.</li>
    </ul>
    <p>En Districo, no solo distribuimos productos; construimos relaciones sólidas y duraderas. Gracias por elegirnos como tu socio de confianza en la distribución.</p>
    <p><em>¡Descubre la diferencia con Districo!</em></p>
    <p><a href="#" class="btn btn-primary">comprar ahora</a></p>
</div>

					</div>
				</div>
			</div>
		</section>

		
		
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function(){
       

        // Cerrar el menú al hacer clic fuera de él
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#ftco-nav').length && !$(e.target).closest('.navbar-toggler').length) {
                $('#ftco-nav').removeClass('show');
            }
        });
    });
</script>
  
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('js/popper.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('js/aos.js') ?>"></script>
<script src="<?= base_url('js/jquery.animateNumber.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap-datepicker.js') ?>"></script>
<script src="<?= base_url('js/scrollax.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('js/google-map.js') ?>"></script>
<script src="<?= base_url('js/main.js') ?>"></script>

<!-- Contact Javascript Files -->
<script src="<?= base_url('js/mail/jqBootstrapValidation.min.js') ?>"></script>
<script src="<?= base_url('js/mail/contact.js') ?>"></script>


    
  </body>
</html>