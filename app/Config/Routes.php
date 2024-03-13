<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//visualizar.ruta.controlador
$routes->get('/', 'Home::index');

//RUTAS PARA EL TEMA DE SESSIONES USUARIO

//visualizar el formulario de registro
$routes->get('distribuidora', 'Home::registrarse');
$routes->get('cerrar_sesion', 'Home::cerrar_sesion');
//ruta para el inicio de sesion del usario
$routes->post('login', 'Home::login');
//ruta para guardar la informacion de el formulario de registro
$routes->post('guardar', 'Home::guardar');



$routes->post('login2', 'Home::login2');
$routes->post('guardar2', 'Home::guardar2');
$routes->get('cerrar_sesion2', 'Home::cerrar_sesion2');



//RUTAS PARA EL TEMA DE SESSIONES ADMINISTRADOR

//vista del panel del administrador
$routes->get('panel', 'Home::panel');
$routes->get('tabla', 'Home::tabla');
//funcion para la vista del login del admin
$routes->get('admi', 'Home::admi');
// Ruta encriptar admi
$routes->get('encriptar', 'Home::encriptar');
$routes->get('cerrar_sesion_admi', 'Home::cerrar_sesion_admi');

//RUTA PARA QUE EL ADMINISTRADOR MANDE LOS PRODUCTOS A LA BASE DE DATOS Y LOS REFLEJE EN EL PANEL 
$routes->post('aggproducto', 'Home::agregarproducto');
//ruta para que el admin mande los productos a la base de datos 
$routes->post('aggcategoria', 'Home::agregarcategoria');
$routes->post('contacto', 'Home::enviar');
$routes->get('districo', 'Home::guardar_districo');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('soporte', 'Home::soporte');
$routes->get('usuario', 'Home::usuario');
$routes->get('pedidos', 'Home::pedidos');
$routes->post('finalizarCompra', 'Home::finalizarCompra');
$routes->post('eliminar_producto/(:num)', 'Home::eliminar/$1');
$routes->post('guardarbd/(:num)', 'Home::guardarbd/$1');


//visualizar pagina sobre nosotros
$routes->get('sobre', 'Home::sobre');
$routes->get('categoria', 'Home::categoria');
//visualizar pagina blog
$routes->get('blog', 'Home::blog');
//visualizar pagina para contactarnos
$routes->get('contactanos', 'Home::contactanos');
//visualizar pagina de lista de productos
$routes->get('lista', 'Home::lista');
//visualizar pg de productos unicos
$routes->get('prounicos', 'Home::prounicos');

//visualizar pagina de productos
$routes->get('productos', 'Home::productos');
//visualizar pagina de productos
$routes->get('carrito', 'Home::carrito');
$routes->post('aggcarrito', 'Home::agregaralcarrito');
$routes->post('actualizar-carrito/(:num)', 'Home::actualizarCarrito/$1');
$routes->add('eliminar-del-carrito/(:num)', 'Home::eliminarProducto/$1');
$routes->add('eliminar-del-carrito2/(:num)', 'Home::eliminarProducto/$1');
$routes->add('obtenerRecuentoCarrito', 'Home::obtenerRecuentoCarrito');
//visualizar pagina de inicio
$routes->get('inicio', 'Home::inicio');

//visualizar el filtro
$routes->get('filtro', 'Home::filtro');
//visualizar el enviar datos del filtro
$routes->post('filtro', 'Home::filtro');
$routes->post('guardaradmi','Home::guardaradmin');


$routes->get('Bebidas', 'Home::Bebidas');
$routes->get('Frutas', 'Home::Frutas');
$routes->get('Aseopersonal', 'Home::Aseopersonal');
$routes->get('verduras', 'Home::verduras');
$routes->get('arinas', 'Home::arinas');
$routes->get('vaciar_carrito', 'Home::vaciar_carrito');
$routes->get('formulario_pedido', 'Home::formulario_pedido');
$routes->get('forpedido', 'Home::forpedido');
$routes->post('pedido', 'Home::pedido');
$routes->get('forpago', 'Home::forpago');
$routes->post('procesarBancolombia', 'Home::procesarBancolombia');
$routes->post('procesarmetodocomun/(:any)', 'Home::procesarmetodocomun/$1');
$routes->post('procesarNequi', 'Home::procesarNequi');
$routes->post('pago/procesar/(:segment)', 'Home::procesarPago/$1');
$routes->get('pedidofinal', 'Home::pedidofinal');
$routes->post('procesar-pedido', 'Home::construirdatospedido');
$routes->get('cancelar_compra', 'Home::cancelarCompra');
$routes->post('finalizarCompra', 'Home::finalizarCompra');



 
