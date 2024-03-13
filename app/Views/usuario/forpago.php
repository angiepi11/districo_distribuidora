

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Chocó Eco Tours</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="icon" type="icon/png" href="img/logo2.jpg">  

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('css/ess.css') ?>">
   

</head>
<body> 
     <?php if (session()->has('message')) : ?>
    <div class="alert alert-success">
        <?= session('message') ?>
    </div>
<?php endif; ?>
    <div class="payment-form">
  
<center><h3>Formulario de Pago</h3>
<center> <h5>Metodos de pago</h5>
        <div class="payment-methods">
            <div class="payment-method selected" data-method="visa">
                <i class="fab fa-cc-visa"></i> Visa
            </div>
            <div class="payment-method" data-method="mastercard">
                <i class="fab fa-cc-mastercard"></i> Mastercard
            </div>
            <div class="payment-method" data-method="amex">
                <i class="fab fa-cc-amex"></i> American Express
            </div>
            <div class="payment-method" data-method="nequi">
                <i class="fas fa-mobile-alt"></i> Nequi
            </div>
            <div class="payment-method" data-method="bancolombia">
                <i class="fas fa-university"></i> Bancolombia
            </div>
        </div>

        <form id="visaForm" action="<?= base_url('procesarmetodocomun/visa'); ?>" method="POST" class="payment-method-details">
        <input type="hidden" name="metodo_pago" value="visa">

        <label for="nombre">Nombre :</label>
                <input type="text" id="nam" name="nombre_completo" placeholder="Ingresa su nombre completo"required>    

            <label for="cardNumber">Número de tarjeta:</label>
            <input type="text" id="cardNumber" name="numero_tarjeta" placeholder="Ingresa el número de tarjeta"required>

            <label for="expirationDate">Fecha de expiración:</label>
            <input type="text" id="expirationDate" name="fecha_expiracion" placeholder="MM/AA"required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Ingresa el CVV"required>

            <button type="submit" class="btn">Realizar Pago</button>
        </form>

        <form id="mastercardForm" action="<?= base_url('procesarmetodocomun/mastercard'); ?>" method="POST" class="payment-method-details">
        <input type="hidden" name="metodo_pago" value="mastercardForm">

        <label for="nombre">Nombre :</label>
                <input type="text" id="nam" name="nombre_completo" placeholder="Ingresa su nombre completo"required>    

            <label for="cardNumber">Número de tarjeta:</label>
            <input type="text" id="cardNumber" name="numero_tarjeta" placeholder="Ingresa el número de tarjeta"required>

            <label for="expirationDate">Fecha de expiración:</label>
            <input type="text" id="expirationDate" name="fecha_expiracion" placeholder="MM/AA"required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Ingresa el CVV"required>

            <button type="submit" class="btn">Realizar Pago</button>
        </form>

        <form id="amexForm" action="<?= base_url('procesarmetodocomun/amex'); ?>" method="POST" class="payment-method-details">
        <input type="hidden" name="metodo_pago" value="amexForm">

        <label for="nombre">Nombre :</label>
                <input type="text" id="nam" name="nombre_completo" placeholder="Ingresa su nombre completo"required>    

            <label for="cardNumber">Número de tarjeta:</label>
            <input type="text" id="cardNumber" name="numero_tarjeta" placeholder="Ingresa el número de tarjeta"required>

            <label for="expirationDate">Fecha de expiración:</label>
            <input type="text" id="expirationDate" name="fecha_expiracion" placeholder="MM/AA"required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Ingresa el CVV"required>

            <button type="submit" class="btn">Realizar Pago</button>
        </form>

        <form id="nequiForm" action="<?= base_url('procesarNequi'); ?>" method="POST" class="payment-method-details">

        <label for="nombre">Nombre :</label>
                <input type="text" id="nam" name="nombre_completo" placeholder="Ingresa su nombre completo"required>    

            <label for="phoneNumber">Número de celular:</label>
            <input type="text" id="phoneNumber" name="numero_telefono" placeholder="Ingresa el número de celular"required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contrasena" placeholder="Ingresa la contraseña"required>

            <button type="submit" class="btn">Realizar Pago</button>
        </form>

        <form id="bancolombiaForm" action="<?= base_url('procesarBancolombia'); ?>" method="POST" class="payment-method-details">

        <label for="nombre">Nombre :</label>
                <input type="text" id="nam" name="nombre_completo" placeholder="Ingresa su nombre completo"required>    

            <label for="accountNumber">Número de cuenta:</label>
            <input type="text" id="accountNumber" name="numero_cuenta" placeholder="Ingresa el número de cuenta"required>

            <label for="pin">PIN:</label>
            <input type="password" id="pin" name="pin" placeholder="Ingresa el PIN"required>

            <button type="submit" class="btn">Realizar Pago</button>
        </form>
    </div>

    <script>
        const paymentMethods = document.querySelectorAll('.payment-method');
        const paymentMethodDetails = document.querySelectorAll('.payment-method-details');

        paymentMethods.forEach(method => {
    method.addEventListener('click', () => {
        const selectedMethod = method.getAttribute('data-method');
        const methodInput = document.querySelector(`#${selectedMethod}Form input[name="metodo_pago"]`);

        paymentMethods.forEach(method => {
            method.classList.remove('selected');
        });

        method.classList.add('selected');

        paymentMethodDetails.forEach(details => {
            details.style.display = 'none';
        });

        const detailsToShow = document.getElementById(selectedMethod + 'Form');
        detailsToShow.style.display = 'block';

        methodInput.value = selectedMethod;
    });
});

    </script>
</body>
</html>
