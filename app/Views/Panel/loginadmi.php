
<!-- Resto del código... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admi</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('cssadmi/estilo.css') ?>">
</head>
<body>
    <div class='form animated bounceIn'>
        <h2 style="text-align: center;">DISTRICÓ</h2>
        <form method="POST" action="<?php echo base_url().'guardaradmi';?>">
            <input placeholder='nombre usuario' name='nombre' type='text' required>
            <input placeholder='contraseña' name='contraseña' type='password' required>
            <button type="submit" class='animated infinite pulse'>Login</button>
        </form>
        <?php if(session('nolog')): ?>
 <script>
  Swal.fire({
    icon: 'error',
    title: 'Error de autenticación',
    text: 'USUARIO / CONTRASEÑA INCORRECTOS' })</script>

          <?php endif; ?>

       
    </div>
</body>
</html>
