<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Distribuidora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- jQuery y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- Agrega estas líneas en el head de tu HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">




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
<link rel="stylesheet" href="<?= base_url('css/est.css') ?>">

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

    <form action="<?php echo base_url().'filtro';?>" method="post">
    <div class="contenedor-fluid">
        <div class="contenedor"> 
            <div class="fondo-claro">
                <div class="fila">
                    <div class="col-md-10">
                        <div class="fila">
                            <div class="col-md-3">
                                <div class="margen-inferior-md-0">
                                    <select class="seleccion-personalizada" name="productos">
                                        <option value="" selected>Productos</option>
                                        <?php foreach ($categoria as $categoria): ?>
                                            <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="margen-inferior-md-0">
                                    <select class="seleccion-personalizada" name="presupuesto">
                                    <option value="" selected>Presupuesto</option>
                                    <option value="1">Todos</option>

                                    
                                    <!--
                                        </*?php foreach ($productos as $producto): ?>
                                            <option value="</**/?php echo $producto['Id']; ?>"></*?php echo $producto['precio_actual']; ?></option>*/
                                        </**/?php endforeach; ?>
                                        -->
                                    </select>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-2">
                        <button class="boton btn-primario btn-bloque" name="boton" type="submit">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(<?=base_url('images/imgfon1.png')?>)">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Te ofrecemos los mejores productos &amp; servicios</h1>
	              <h2 class="subheading mb-4">Te ofrecemos una variedad de alimentos &amp; productos </h2>
	              <p><a href="#" class="btn btn-primary">mas sobre nosotros</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(<?=base_url('images/imgfon2.png')?>);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Confiables &amp; recomendado</h1>
	              <h2 class="subheading mb-4">Te ofrecemos una variedad de alimentos &amp; productos </h2>
	              <p><a href="<?php echo base_url().'sobre';?>" class="btn btn-primary">mas sobre nosotros</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>
</head>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services align-items-stretch" style="margin-top: -50px;">
            <!-- Puedes ajustar el valor del margen superior según tus necesidades -->
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">ENVIOS GRATIS</h3>
                        <span>En pedidos superiores o igual a $6millones</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Alimentos Frescos</h3>
                        <span>Te ofrecemos productos en las mejores condiciones</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Calidad Superior</h3>
                        <span>Productos de calidad</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate mb-4">
                <div class="media block-6 services mb-md-0">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Soporte</h3>
                        <span>24/7 </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


		<section class="ftco-section ftco-category ftco-no-pt" >
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								
							<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url('<?= base_url('images/cam.jpg') ?>'); width: 500px; height: 530px; ">

									<div class="text text-center">

										
									</div>
								</div>
							</div>
							<div class="col-md-6">

								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?=base_url('images/limpieza.jpg')?>)">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">limpieza</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?=base_url('images/harinas.jpg')?>)">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Harinas</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?=base_url('images/higiene.jpg')?>)">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Higiene</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?=base_url('images/caryem.jpg')?>)">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Carnes</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section" style="margin-top:-100px">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Productos Destacados</span>
            <h2 class="mb-4">Nuestros Productos</h2>
            <p>Aqui estan algunos de nuestros productos para que escojas segun tu eleccion y necesidad</p>
          </div>
        </div>   		
    	</div>
       
      <div class="container">
    <div class="row">
        <?php foreach ($productos as $producto) : ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?php echo base_url().'prounicos';?>" class="img-prod">
                        <img class="img-fluid" src="data:image/*;base64,<?= base64_encode($producto['imagen']) ?>" alt="<?= $producto['nombre'] ?>">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#"><?= $producto['nombre'] ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <span class="mr-2 price-dc">$<?= $producto['precio_anterior'] ?></span>
                                    <span class="price-sale">$<?= $producto['precio_actual'] ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <!-- Formulario para agregar al carrito -->

                          <form method="POST" action="<?php echo base_url('aggcarrito');?>">
                                <input type="hidden" name="producto_id" value="<?= $producto['Id'] ?>">
                                <input type="hidden" name="nombre" value="<?= $producto['nombre'] ?>">
                                <input type="hidden" name="precio" value="<?= $producto['precio_actual'] ?>">
                                <input type="hidden" name="imagen" value="<?= base64_encode($producto['imagen']) ?>">
                                <button type="submit" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </button>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

		
    </div>
</div>

		
    <!---->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





<div style="text-align: center;">
    <a href="<?php echo base_url().'productos';?>" class="btn btn-primary" style="width: 150px;">ver mas</a>
</div>

		<section class="ftco-section img" style="background-image:  url(<?= base_url('images/dis.png') ?>)">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Los mejores Precios</span>
            <h2 class="mb-4">Oferta del dia</h2>
            <p>En este espacio estaremos mostrando los productos en oferta</p>
            <h3><a href="#">Productos para la higiene personal</a></h3>
            <span class="price">mariscos<a href="#">ahora solo a $8.000</a></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimonios</span>
            <h2 class="mb-4">Nuestros clientes satisfechos dicen</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image:  url(<?= base_url('images/person_1.jpg') ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                <p class="mb-5 pl-4 line">Estoy impresionado con la rapidez y eficiencia del servicio de Districo. Mis pedidos siempre llegan a tiempo y en perfecto estado. ¡Excelente trabajo!</p>
                <p class="name">Ana Rodríguez</p>
                <span class="position">Cliente Satisfecha</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image:  url(<?= base_url('images/person_2.jpg') ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                <p class="mb-5 pl-4 line">La calidad de los productos de Districo es incomparable. Siempre encuentro lo que necesito y el servicio al cliente es excepcional.</p>
                <p class="name">Carlos Gómez</p>
                <span class="position">Cliente Frecuente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
				<div class="user-img mb-5" style="background-image: url(<?= base_url('images/person_3.jpg') ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <<div class="text text-center">
                <p class="mb-5 pl-4 line">Estoy impresionado con la rapidez y eficiencia del servicio de Districo. Mis pedidos siempre llegan a tiempo y en perfecto estado. ¡Excelente trabajo!</p>
                <p class="name">Ana Rodríguez</p>
                <span class="position">Cliente Satisfecha</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(<?= base_url('images/person_1.jpg') ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <<div class="text text-center">
                <p class="mb-5 pl-4 line">Estoy impresionado con la rapidez y eficiencia del servicio de Districo. Mis pedidos siempre llegan a tiempo y en perfecto estado. ¡Excelente trabajo!</p>
                <p class="name">Ana Rodríguez</p>
                <span class="position">Cliente Satisfecha</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(<?= base_url('images/person_1.jpg') ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                <p class="mb-5 pl-4 line">La calidad de los productos de Districo es incomparable. Siempre encuentro lo que necesito y el servicio al cliente es excepcional.</p>
                <p class="name">Carlos Gómez</p>
                <span class="position">Cliente Frecuente</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    <a href="#" class="partner"><img src="<?= base_url('images/partner-1.png') ?>" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-sm ftco-animate">
    <a href="#" class="partner"><img src="<?= base_url('images/partner-2.png') ?>" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-sm ftco-animate">
    <a href="#" class="partner"><img src="<?= base_url('images/partner-3.png') ?>" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-sm ftco-animate">
    <a href="#" class="partner"><img src="<?= base_url('images/partner-4.png') ?>" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-sm ftco-animate">
    <a href="#" class="partner"><img src="<?= base_url('images/partner-5.png') ?>" class="img-fluid" alt="Colorlib Template"></a>
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
        <<div class="row mb-5">
  <div class="col-md">
    <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">Districo</h2>
      <p>Bueno, Bonito, Barato, ven pronto te esperamos.</p>
      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="col-md">
    <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Menú</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Productos</a></li>
        <li><a href="#" class="py-2 d-block">Acerca de nosotros</a></li>
        <li><a href="#" class="py-2 d-block">Contáctenos</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-4">
    <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">Ayuda</h2>
      <div class="d-flex">
        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
          <li><a href="#" class="py-2 d-block">Información de envío</a></li>
          <li><a href="#" class="py-2 d-block">Devoluciones y cambios</a></li>
          <li><a href="#" class="py-2 d-block">Términos y condiciones</a></li>
        </ul>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Preguntas frecuentes</a></li>
          <li><a href="#" class="py-2 d-block">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2">¿Tienes preguntas?</h2>
      <div class="block-23 mb-3">
        <ul>
          <li><span class="icon icon-map-marker"></span><span class="text">203 Colombia</span></li>
          <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
          <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Districo@gmail.com</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">
    <p>
      <!-- El enlace de retorno a Colorlib no se puede eliminar. La plantilla está bajo licencia CC BY 3.0. -->
      Derechos de autor &copy;<script>document.write(new Date().getFullYear());</script>
      <!-- El enlace de retorno a Colorlib no se puede eliminar. La plantilla está bajo licencia CC BY 3.0. -->
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