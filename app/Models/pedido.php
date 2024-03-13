<?php
// app/Models/PedidoModel.php

namespace App\Models;

use CodeIgniter\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'id_usuario','id_producto','fecha','correo','telefono','direccion','metodo_pago','quien_recibe','imagen_producto','nombre_producto','cantidad','subtotal_producto','total_compra'];

 


    public function construirdatospedido()
{

    $correo = isset($datosPedido['correo']) ? $datosPedido['correo'] : null;

    // Generar automáticamente el número de pedido
    $numeroPedido = uniqid();

    // Obtener la fecha en tiempo real
    $fecha = date('Y-m-d H:i:s');

    // Obtener el nombre del comprador de la sesión del usuario
    $usuarioId  = session()->get('id');

    // Obtener los datos del pedido almacenados en la sesión
    $datosPedido = session()->get('datosPedido');

    // Obtener el total directamente del carrito
    $totalCarrito = session()->get('total');

   
    // Obtener información del carrito
    $carrito = session()->get('carrito') ?? [];
   
    // Obtener datos específicos del método de pago según el método seleccionado
    $metodoPagoSeleccionado = session()->get('metodo_pago_seleccionado');

    // Obtener datos específicos del método de pago según el método seleccionado
  
    $datosProcesarMetodoPago = null;

    if ($metodoPagoSeleccionado) {
        switch ($metodoPagoSeleccionado) {
            case 'visa':
            case 'mastercard':
            case 'amex':
                $datosProcesarMetodoPago = session()->get('datosProcesarComun');
                break;
            case 'nequi':
                $datosProcesarMetodoPago = session()->get('datosProcesarNequi');
                break;
            case 'bancolombia':
                $datosProcesarMetodoPago = session()->get('datosProcesarBancolombia');
                break;
            // Puedes agregar más casos según tus necesidades
        }
    }

    $productosPedido = [];
    foreach ($carrito as $producto) {
        $productosPedido[] = [
            'imagen_producto' => '<img style="max-width: 100px;" src="data:image/*;base64,' . $producto['imagen'] . '" alt="Imagen del Producto">',
            'nombre_producto' => $producto['nombre'],
            'cantidad' => $producto['cantidad'],
            'subtotal_producto' => $producto['precio'] * $producto['cantidad'],
            'id_producto' => $producto['id'], //  el ID del producto

        ];
    }

    // Ahora, puedes construir los datos del pedido
    $datosPedido = [
        'numero_pedido' => $numeroPedido,
        'fecha' => $fecha,
        'id_usuario' => $usuarioId,
        'correo' => $datosPedido['correo'],
        'telefono' => $datosPedido['numero'], 
        'direccion' => $datosPedido['direccion'],
        'quien_recibe' => $datosPedido['nombre'],
        'metodo_pago' => $metodoPagoSeleccionado, 
        'total_compra' => $totalCarrito, 
        'productos' => $productosPedido, 
    ];


    
    // Retorna los datos del pedido
    return $datosPedido;
}

}


 