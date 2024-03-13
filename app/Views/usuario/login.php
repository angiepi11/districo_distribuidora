<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
    <link rel="stylesheet" href="<?= base_url('css2/estilos.css') ?>">



</head>
<body>
<main class="contener">
  
<?php if(session('error')): ?>
  <script>
  Swal.fire({
    icon: 'error',
    title:'0ops...',
    text: 'EL CORREO YA EXISTE, REGISTRESE DE NUEVO' })</script>
        
          <?php endif; ?>

            
<?php if(session('nologin')): ?>
 <script>
  Swal.fire({
    icon: 'error',
    title:'0ops...',
    text: 'USUARIO / CONTRASEÑA INCORRECTOS' })</script>

          <?php endif; ?>


<div class="container">
  <div class="backbox">
 
    <div class="loginMsg">
    
      <div class="textcontent">
        <p class="title">No tienes una cuenta?</p>
        <p>Registrate para guardar tus datos.</p>
        <button id="switch1">REGISTRATE</button>      <a style="padding: 8px 5px;     border: 2px solid white;"class="switch1" href="<?php echo base_url().'inicio';?>">volver a inicio</a>

      </div>
    </div>
    <div class="signupMsg visibility">
      <div class="textcontent">
        <p class="title">Tienes una cuenta?</p>
        <p>inicia sesion para ver mas informacion.</p>
        <button id="switch2">INICIAR SESION</button>
      </div>
    </div>
  </div>
  <!-- backbox -->

  <div class="frontbox">
        <!-- Formulario de inicio de sesión -->
              <!-- el action es para llamar la ruta -->
  
        <form method="POST" action="<?php echo base_url().'login';?>">
    <div class="login">
      <h2>Iniciar sesion</h2>
      <div class="inputbox">
        <input type="text" name="correo" placeholder="CORREO" required style="border: 2px solid rgba(31, 29, 29, 0.185);">
        <input type="password" name="contraseña" placeholder="CONTRASEÑA" required style="border: 2px solid rgba(31, 29, 29, 0.185);">
      </div>
      <p>Olvidaste tu contraseña?</p>
      <button style="width:100px;">INICIAR SESION</button>
    </div>
    </form>
    <!-- Formulario de registro -->
    <form action="<?php echo base_url().'guardar';?>" method="POST">
      <div class="signup hide">
        <h2>Registrarse</h2>
       
        <div class="inputbox">
          <input type="text" name="nombre_apellido" placeholder="NOMBRE Y APELLIDO" required style="border: 2px solid rgba(31, 29, 29, 0.185);">
          <input type="text" name="correo_registro" placeholder="CORREO" required style="border: 2px solid rgba(31, 29, 29, 0.185);">
          <input type="password" name="contraseña_registro" placeholder="CONTRASEÑA" required style="border: 2px solid rgba(31, 29, 29, 0.185);">
        </div>
        <button style="width:100px;">REGISTRARSE</button>
      </div>
    </form>
  </div>
  <!-- frontbox -->
</div>
<script >
    var $loginMsg = $('.loginMsg'),
  $login = $('.login'),
  $signupMsg = $('.signupMsg'),
  $signup = $('.signup'),
  $frontbox = $('.frontbox');

$('#switch1').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.addClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

$('#switch2').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.removeClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

setTimeout(function(){
  $('#switch1').click()
},1000)

setTimeout(function(){
  $('#switch2').click()
},3000)

</script>

</body>
</html>
