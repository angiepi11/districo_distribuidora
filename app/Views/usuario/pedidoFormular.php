<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Distribuidora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



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
<link rel="stylesheet" href="<?= base_url('css/ess.css') ?>">

  </head> 


  <?php if(session('nologin')): ?>
 <script>
  Swal.fire({
    icon: 'success',
    title:'Pedido',
    text: 'Pedido realizado con exito' })</script>

          <?php endif; ?>
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

    <div class="hero-wrap hero-bread" style="background-image: url(<?=base_url('images/bg_1.jpg')?>)">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">REALIZAR PEDIDO</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-4 mt-5 cart-wrap ftco-animate mx-auto"> 
    <div class="cart-total ">
        <h3 class="text-center">Diligencie el formulario</h3>
        <p>Ingrese su destino para el envío</p>
        <form action="<?php echo base_url('pedido');?>" method="post" class="info">
            <div class="form-group">
                <label for="pais">Departamento</label>
                <input type="text" name="departamento" class="form-control text-left px-3" placeholder="" >
            </div>
            <div class="form-group">
                <label for="estado">municipio</label>
                <input type="text" name="municipio" class="form-control text-left px-3" placeholder="" >
            </div>
            <div class="form-group">
                <label for="ciudad">Dirección</label>
                <input type="text" name="direccion" class="form-control text-left px-3" placeholder="" >
            </div>
            <div class="form-group">
                <label for="ciudad">Correo</label>
                <input type="text" name="correo" class="form-control text-left px-3" placeholder="" >
            </div>
            <div class="form-group">
                <label for="ciudad">Numero celular</label>
                <input type="text" name="numero" class="form-control text-left px-3" placeholder="" >
            </div>
            <div class="form-group">
                <label for="direccion">Nombre de la persona que recibe</label>
                <input type="text" name="nombre" class="form-control text-left px-3" placeholder="" >
            </div>
            <p class="text-center"><button type="submit" style="margin-top: 10px" class="btn btn-primary py-3 px-4">GUARDAR DATOS</button></p>
        </form>
    </div>
</div>

    
<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    <div class="cart-total mb-3" style="text-align: center; margin-top: 30px; margin-left:-10px">
        <h3>Total del carrito</h3>
        <p class="d-flex">
            <span>Subtotal</span>
            <span>$<?= $subtotal ?></span>
        </p>
        <p class="d-flex">
            <span>Envío</span>
            <span>$<?= $costoEnvio ?></span>
        </p>
        <hr>
        <p class="d-flex total-price">
            <span>Total</span>
            <span>$<?= $total ?></span>
        </p>
    </div>
  <!-- Botón Volver al Carrito en la vista de pedido -->
<p class="text-center">
<a href="<?= base_url('carrito') ?>">
      <!-- El usuario no ha realizado el pedido y no ha guardado datos del formulario -->
      <button type="button" style="margin-top: 10px" class="btn btn-primary py-3 px-4">VOLVER AL CARRITO</button>
  </a>
</p>
</div>

    </div>


       
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		
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