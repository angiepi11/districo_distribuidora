<?php

namespace App\Controllers;


class Home extends BaseController
{
   public $session;
   //funcion de inicializacion
   public function __construct(){
    $this->session = \Config\Services::session();
}
   
   public function index():string
   {

    $categoriaModel = new \App\Models\categoria(); 
    $data['categoria'] = $categoriaModel->findAll();
    
    $productoModel = new \App\Models\Producto();
    $data['productos'] = $productoModel->findAll();
    
    return view('usuario/inicio',$data);

   } 
//_______________________________________________________________________________________________________________________

     //INOFROMACION DE SESSION DEL USUARIO

    // FUNCION PARA EL TEMA DE INICIAR SESION
   public function login()
   {
        // Cargar el modelo
    $usuarioModel = model('usuario');
    //seleccionamos el correo, de tal forma que se seleccione el correo que tiene la base de datos y que lo iguale con el correo que viene del formulario.
   //getwhere para selecionar datos de la base de datos
    $resultado= $usuarioModel-> getWhere([
       'correo'=> $this->request->getPost("correo")
    ]);
    //el getrow selecciona la fila 0. selecciona un resultado que ya viene de la base de datos 
    //usuario guarda los resultados
    $usuario = $resultado->getRow();
    if($usuario){

     if(password_verify(strval($this->request->getPost("contraseña")), $usuario->contraseña)){
    
       $datos=[
   'id'=>$usuario->Id,
   'usuario'=> $usuario->nombre_apellido,
];
$productoModel = new \App\Models\Producto();
$data['productos'] = $productoModel->findAll();
//guardar datos de session
$this->session->set($datos);
return redirect()->route('inicio',$data);
}
}

$this->session->setFlashdata('nologin', true);


return redirect()->route('distribuidora');
   }

//********************************************************************************************************************

   // FUNCION PARA EL TEMA DE REGISTROS

   public function registrarse():string
   {
    
    $productoModel = new \App\Models\Producto();
    $data['productos'] = $productoModel->findAll();

      
       return view('usuario/login',$data);
   }

   public function guardar(){
    $productoModel = new \App\Models\Producto();
    $data['productos'] = $productoModel->findAll();
    $categoriaModel = new \App\Models\categoria(); 
    $data['categoria'] = $categoriaModel->findAll();


   //variables parfa guardar los nombres del formulario
   $nombre_apellido=$this->request->getpost("nombre_apellido");
   $correo=$this->request->getpost("correo_registro");
   $contraseña=password_hash(strval($this->request->getpost("contraseña_registro")), PASSWORD_DEFAULT);
// Cargar el modelo
$usuarioModel = model('usuario');
//primer  valor: columnas de la base de dato/ segundo valor: datos que vienen del formulario
$datos= array(
   "nombre_apellido"=>$nombre_apellido,
   "correo"=>$correo,
   "contraseña"=>$contraseña

);
   $resultado=$usuarioModel->getWhere(['correo'=>$correo]);
   if(!$resultado->getResult()){
   //si hay datos

   }
   else {   
   // si no hay datos
   $this->session->setFlashdata('error', true);
   return redirect()->route('distribuidora');
   }

   if ($usuarioModel->insert($datos)) {

// Después del registro exitoso, establece el nombre del usuario en la sesión

       $datosSession = [
           'id' => $usuarioModel->getInsertID(),
           'usuario' => $nombre_apellido,
       ];
   
       $this->session->set($datosSession);

      

       return view('usuario/inicio', $data);
   }
 
}


public function cerrar_sesion(){

   $this->session->remove("Id");
   $this->session->remove("usuario");
   return redirect()->route('inicio');

  }
//_______________________________________________________________________________________________________________________


  //INOFROMACION DE SESSION DEL ADMINISTRADOR

//funcion para la vista del login del admin
   public function admi():string
   {
      
       return view('panel/loginadmi');
   }


   public function guardaradmin()
   {
   
       // Verifica si se ha enviado el formulario
       if ($this->request->getMethod() === 'post') {
           // Obtén las credenciales del formulario
           $usuario = $this->request->getPost('nombre');
           $contraseña = $this->request->getPost('contraseña');
   
           // Verifica las credenciales del administrador en la base de datos
           $adminModel = model('admin');
           $admin = $adminModel->getWhere([
               'usuario' => $usuario,

           ])->getRow();
   
           if ($admin && password_verify($contraseña, $admin->contraseña)) {
               // Credenciales válidas, se establece la session
               $datosadmi=[
                'Id'=>$admin->id,
                'Usuario'=> $admin->nombre_completo,
            ];
            //guardar datos de session
            $this->session->set($datosadmi); 
             
            return redirect()->to(base_url('panel'));
          
        } 
             }
             $this->session->setFlashdata('nolog', true);
             return redirect()->route('admi');
      
         }

        public function encriptar()
        {
            return view('panel/encriptar');
        }

        public function cerrar_sesion_admi(){
        
            $this->session->remove("Id");
            $this->session->remove("Usuario");
            return redirect()->route('admi');
        
           }

   public function panel()
   {
       // Verificar si el usuario ha iniciado sesión
       if (!$this->session->has('Id')) {
           // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
           return redirect()->route('admi');
       }
   
       
       // Por ejemplo, cargar la vista del panel
       return view('panel/index');
   }

//_________________________________________________________________________________________________________________

//FUNCIONES PARA QUE EL ADMINISTRADOR AGREGE EL PRODUCTO Y LA CATEGORIA DESDE EL PANEL
// Y LO MANDE A LA BASE DE DATOS Y DE IGUAL MANERA LO REFELEJE EN EL PANEL

public function agregarproducto(){

    // aqui se esta Configurando la subida de la iamgen 
    $imagen = $this->request->getFile('imagen');
    $imagenDatos = file_get_contents($imagen->getPathname());
      
                                         // Obtener los datos del formulario
                                         $data = [
 /*NOMBRES DE LA BASE DE DATOS -->*/    'nombre' => $this->request->getPost('nombre'),
                                        'precio_actual' => $this->request->getPost('precioactual'),
                                        'precio_anterior' => $this->request->getPost('precioanterior'),  /*<-- NOMBRES DEL FORMULARIO*/ 
                                        'descripcion' => $this->request->getPost('descripcion'),
                                        'categoria' => $this->request->getPost('categoria'),
                                        'imagen' => $imagenDatos,
    ];

//cargar modelo
     $productoModel = model('producto');
     // Insertar en la base de datos
     $productoModel->insert($data);
    // Redirigir a la página principal o donde desees en la carpeta 'panel'

  
    
     return redirect()->to('tabla');
    }


    public function agregarcategoria(){
    // Obtener los datos del formulario
    $data = [
        'nombre' => $this->request->getPost('nombre'),
    ];
     // Cargar el modelo utilizando el servicio 'model'
     $categoriaModel = model('categoria');
    
     // Insertar en la base de datos
     $categoriaModel->insert($data);
    
     // Redirigir a la página principal o donde desees en la carpeta 'panel'
     return redirect()->to('categoria');
    
        }

//__________________________________________________________________________________________________________________________________________________________

  
  //INOFORMACION DEL ENVIO DE CONTACTANOS EN EL SITIO WEB

  public function enviar(){
    $nombre = $this->request->getPost('nombre');
    $correo = $this->request->getPost('correo');
    $asunto = $this->request->getPost('asunto');
    $mensaje = $this->request->getPost('mensaje');
    // Cargar el modelo
    $contactoModel = model('contacto');

    $datos= array(
    "nombre"=>$nombre,
    "correo"=>$correo,
    "asunto"=>$asunto,
    "mensaje"=>$mensaje,

    );
    if ($contactoModel->insert($datos)) {

       
    return redirect()->to('contactanos')->with('message', 'Mensaje enviado con exito!');
    // Cambia 'usuario/contact' por la URL a la que deseas redirigir.
    } }

//_________________________________________________________________________________________________________________________________________________
   

//__________________________________________________________________________________________________________________________________________________________

  
public function pedido(){
    $departamento = $this->request->getPost('departamento');
    $municipio = $this->request->getPost('municipio');
    $direccion = $this->request->getPost('direccion');
    $correo = $this->request->getPost('correo');
    $numero = $this->request->getPost('numero');
    $nombre = $this->request->getPost('nombre');

    // Almacenar los datos en variables
    $datosPedido = array(
        "departamento" => $departamento,
        "municipio" => $municipio,
        "direccion" => $direccion,
        "correo" => $correo,
        "numero" => $numero,
        "nombre" => $nombre,
    );

    // Puedes almacenar estas variables en algún lugar para usarlas más adelante
    // Por ejemplo, puedes almacenarlas en la sesión si quieres mantenerlas disponibles durante la sesión actual.

    session()->set('datosPedido', $datosPedido);

    // Redirigir a la página de pago
    return redirect()->to('forpago')->with('nolog', true);
}


//_________________________________________________________________________________________________________________________________________________
   
//MANEJO DE FUNCIONES DEL FORMULARIO DE PAGO Y VISTAS

public function forpago(){

     
     return view('usuario/forpago');

 }

 public function procesarPago($metodo)
{
    // Lógica para procesar el pago según el método seleccionado
    switch ($metodo) {
        case 'visa':
        case 'mastercard':
        case 'amex':
            return $this->procesarmetodocomun($metodo);
        case 'nequi':
            return $this->procesarNequi();
        case 'bancolombia':
            return $this->procesarBancolombia();
        default:
            // Manejar caso por defecto o mostrar un mensaje de error
    }
}

public function procesarmetodocomun($metodo)
{
    // Obtener datos del formulario usando $this->request->getPost()
    $nombreCompleto = $this->request->getPost('nombre_completo');
    $numeroTarjeta = $this->request->getPost('numero_tarjeta');
    $fechaExpiracion = $this->request->getPost('fecha_expiracion');
    $cvv = $this->request->getPost('cvv');

    // Almacenar datos en variables
    $datosProcesarComun = [
        'nombre_completo' => $nombreCompleto,
        'numero_tarjeta' => $numeroTarjeta,
        'fecha_expiracion' => $fechaExpiracion,
        'cvv' => $cvv,
        'metodo_pago' => $metodo,
    ];

    // Puedes almacenar estas variables en algún lugar para usarlas más adelante
    session()->set('datosProcesarComun', $datosProcesarComun);
 // Almacena también el método de pago seleccionado
 session()->set('metodo_pago_seleccionado', $metodo);

    // Ejemplo de redirección después del procesamiento exitoso
    return redirect()->to('pedidofinal')->with('message', "Pago $metodo procesado con éxito!");
}

public function procesarNequi()
{
    // Obtener datos del formulario usando $this->request->getPost()
    $nombreCompleto = $this->request->getPost('nombre_completo');
    $numeroTelefono = $this->request->getPost('numero_telefono');
    $contrasena = $this->request->getPost('contrasena');

    // Almacenar datos en variables
    $datosProcesarNequi = [
        'nombre_completo' => $nombreCompleto,
        'numero_telefono' => $numeroTelefono,
        'contrasena' => $contrasena,
    ];

    // Puedes almacenar estas variables en algún lugar para usarlas más adelante
    session()->set('datosProcesarNequi', $datosProcesarNequi);
    session()->set('metodo_pago_seleccionado', 'nequi');

    // Ejemplo de redirección después del procesamiento exitoso
    return redirect()->to('pedidofinal')->with('message', 'Pago Nequi procesado con éxito!');
}

public function procesarBancolombia()
{
    // Obtener datos del formulario usando $this->request->getPost()
    $nombreCompleto = $this->request->getPost('nombre_completo');
    $numeroCuenta = $this->request->getPost('numero_cuenta');
    $pin = $this->request->getPost('pin');

    // Almacenar datos en variables
    $datosProcesarBancolombia = [
        'nombre_completo' => $nombreCompleto,
        'numero_cuenta' => $numeroCuenta,
        'pin' => $pin,
    ];

    // Puedes almacenar estas variables en algún lugar para usarlas más adelante
    session()->set('datosProcesarBancolombia', $datosProcesarBancolombia);
    session()->set('metodo_pago_seleccionado', 'bancolombia');

    // Ejemplo de redirección después del procesamiento exitoso
    return redirect()->to('pedidofinal')->with('message', 'Pago Bancolombia procesado con éxito!');
}





//__________________________________________________________________________________________________________________________________________


            public function tabla()
        {
 //aqui se estan recuperando todos los productos de la base de datos utilizando el modelo Producto y categoria
    // almaceno esos datos en la variable $data['productos'] y $data['productos']

  // Verificar si el usuario ha iniciado sesión
  if (!$this->session->has('Id')) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    return redirect()->route('admi');
}
            $productoModel = new \App\Models\Producto(); 
            $data['productos'] = $productoModel->findAll();
          
            $categoriaModel = new \App\Models\categoria(); 
            $data['categoria'] = $categoriaModel->findAll();
        
            return view('panel/tables', $data);
        }

        
        public function inicio(){
            $categoriaModel = new \App\Models\categoria(); 
            $data['categoria'] = $categoriaModel->findAll();
            

            $productoModel = new \App\Models\Producto();
             $data['productos'] = $productoModel->findAll();
             
             return view('usuario/inicio',$data);
     
         }

    public function categoria(){
    //aqui se estan recuperando todos los productos de la base de datos utilizando el modelo categpria
    // alamaceno esos datos en la variable $data['categoria']

    $categoriaModel = new \App\Models\categoria(); 
    $data['categoria'] = $categoriaModel->findAll();
    
    
            return view('panel/categorias',$data);
        } 



        public function productos(){

            //aqui se estan recuperando todos los productos de la base de datos utilizando el modelo Producto y categoria
            // almaceno esos datos en la variable $data['productos'] y $data['productos']
        
                  $categoriaModel = new \App\Models\categoria(); 
                  $data['categoria'] = $categoriaModel->findAll();
          
                  $productoModel = new \App\Models\Producto();
                  $data['productos'] = $productoModel->findAll();
                  
                  return view('usuario/productos',$data);
              }
          
        
        
              public function Frutas(){
                  $productoModel = new \App\Models\Producto();
                  $data['productos'] = $productoModel->findAll();
                  $categoriaModel = new \App\Models\categoria(); 
                  $data['categoria'] = $categoriaModel->findAll();
                  
                  return view('usuario/Frutas', $data);
            } 

            public function Aseopersonal(){
                $productoModel = new \App\Models\Producto();
                $data['productos'] = $productoModel->findAll();
                $categoriaModel = new \App\Models\categoria(); 
                $data['categoria'] = $categoriaModel->findAll();
                
                return view('usuario/Aseop', $data);
          } 
          public function arinas(){
            $productoModel = new \App\Models\Producto();
            $data['productos'] = $productoModel->findAll();
            $categoriaModel = new \App\Models\categoria(); 
            $data['categoria'] = $categoriaModel->findAll();
            
            return view('usuario/Arinas', $data);
      } 




            public function Bebidas(){
                $productoModel = new \App\Models\Producto();
                $data['productos'] = $productoModel->findAll();
                $categoriaModel = new \App\Models\categoria(); 
                $data['categoria'] = $categoriaModel->findAll();
                
                return view('usuario/bebidas', $data);
            } 
              

              public function verduras(){
                $productoModel = new \App\Models\Producto();
                $data['productos'] = $productoModel->findAll();
                $categoriaModel = new \App\Models\categoria(); 
                $data['categoria'] = $categoriaModel->findAll();
                
                return view('usuario/verduras', $data);
            }
              
            
                public function prounicos(){
            
                    $productoModel = new \App\Models\Producto();
                    $data['productos'] = $productoModel->findAll();
                    return view('usuario/prounicos',$data);
            
                }
        
                public function soporte(){
            
                    $contactoModel = new \App\Models\Contacto(); 
                    $data['contactos'] = $contactoModel->findAll();
                  
                   
                    return view('panel/soportes',$data);
            
                }

                public function usuario(){
            
                    $contactoModel = new \App\Models\usuario(); 
                    $data['usuarios'] = $contactoModel->findAll();
                  
                   
                    return view('panel/usuario',$data);
            

                }
                public function pedidos(){
            
                    $contactoModel = new \App\Models\Pedido(); 
                    $data['pedidos'] = $contactoModel->findAll();
                  
                   
                    return view('panel/pedido',$data);
            

                }
//___________________________________________________________________________________________________________________________________________________

//FUNCIONES DEL CARRITO

    public function carrito()
    {
        // Obtén el carrito actual de la sesión
        $carrito = $this->session->get('carrito') ?? [];
    
        // Calcular subtotal, costo de envío y total si es necesario
        $subtotal = 0;
        foreach ($carrito as $item) {
            $subtotal += $item['precio'] * $item['cantidad'];
        }
    
        if($subtotal>=6000000){

            $costoEnvio = 0;
        } else{
            $costoEnvio = 500000;
        
        }    
        $total = $subtotal + $costoEnvio;
    
        // Pasa el carrito, subtotal, costo de envío y total a la vista
        $data = [
            'carrito' => $carrito,
            'subtotal' => $subtotal,
            'costoEnvio' => $costoEnvio,
            'total' => $total,
        ];
     // Guarda el total en la sesión
     session()->set('total', $total);

        return view('usuario/carrito', $data);
    }
    
//_----------------------------------------------------------------------------------------------------------------------------------------_

public function agregaralcarrito()
{
    // Obténemos los datos del formulario
    $productoId = $this->request->getPost('producto_id');
    $nombre = $this->request->getPost('nombre');
    $precio = $this->request->getPost('precio');
    $imagen = $this->request->getPost('imagen');
    $cantidad = $this->request->getPost('cantidad'); 


    // obtengo el carrito actual de la sesión
    $carritoActual = $this->session->get('carrito') ?? [];

    // Agrega el producto al carrito
    $carrito = [
        'id' => $productoId,
        'nombre' => $nombre,
        'precio' => $precio,
        'imagen' => $imagen,
        'cantidad' => $cantidad, 
    ];

    $carritoActual[] = $carrito;

    // Actualiza el carrito en la sesión
    $this->session->set('carrito', $carritoActual);

    // Redirige a la vista del carrito
    return redirect()->to('carrito');
}

//_-------------------------------------------------------------------------------------------------------------------------------------------------------_


public function eliminarProducto($productoId)
    {
        // Obténgo el carrito actual de la sesión
        $carritoActual = $this->session->get('carrito') ?? [];

        // Busco el índice del producto en el carrito por el ID
        $indiceProducto = array_search($productoId, array_column($carritoActual, 'id'));

        // Si el producto está en el carrito, lo elimino 
        if ($indiceProducto !== false) {
            unset($carritoActual[$indiceProducto]);

            // Actualizo el carrito en la sesión
            $this->session->set('carrito', array_values($carritoActual));
        }

        // me redirijo de nuevo a la vista del carrito
        return redirect()->to(base_url('carrito'));
    }



    
    //____-------------------------------------------------------------------------------------------------------------------------------------------------_


public function actualizarCarrito($productoId)
{
    // Obtengo la nueva cantidad del formulario
    $nuevaCantidad = $this->request->getPost('cantidad');

    // Obténgo el carrito actual de la sesión
    $carritoActual = $this->session->get('carrito') ?? [];

    // Busco el producto en el carrito por el ID
    $indiceProducto = array_search($productoId, array_column($carritoActual, 'id'));

    // Si el producto está en el carrito, actualizo la cantidad
    if ($indiceProducto !== false) {
        // aqui actualiza la cantidad
        $carritoActual[$indiceProducto]['cantidad'] = $nuevaCantidad;
  
        // Actualizo el carrito en la sesión
    $this->session->set('carrito', $carritoActual);
    }
    

    
    // de nuevo me redirijo a la vista del carrito
    return redirect()->to('carrito')->with('message', 'Carrito actualizado correctamente');
    
}

//_--------------------------------------------------------------------------------------------------------------------------------------------------_

public function vaciar_carrito(){

 //Eliminar el carrito de la sesión
    $this->session->remove('carrito');

    // Redirigir de nuevo a la vista del carrito
    return redirect()->to('carrito')->with('message', 'Carrito vaciado correctamente');
}

 //_________________________________________________________________________________________________________________________________________________   

      
 public function forpedido()
 
 {

    $productoModel = new \App\Models\Producto();
    $data['productos'] = $productoModel->findAll();



    return view('usuario/login2',$data);

}



     //INOFROMACION DE SESSION DEL USUARIO

    // FUNCION PARA EL TEMA DE INICIAR SESION
    public function login2()
    {
         // Cargar el modelo
     $usuarioModel = model('usuario');
     //seleccionamos el correo, de tal forma que se seleccione el correo que tiene la base de datos y que lo iguale con el correo que viene del formulario.
    //getwhere para selecionar datos de la base de datos
     $resultado= $usuarioModel-> getWhere([
        'correo'=> $this->request->getPost("correo")
     ]);
     //el getrow selecciona la fila 0. selecciona un resultado que ya viene de la base de datos 
     //usuario guarda los resultados
     $usuario = $resultado->getRow();
     if($usuario){
 
      if(password_verify(strval($this->request->getPost("contraseña")), $usuario->contraseña)){
     
        $datos=[
    'id'=>$usuario->Id,
    'usuario'=> $usuario->nombre_apellido,
 ];
 $productoModel = new \App\Models\Producto();
 $data['productos'] = $productoModel->findAll();
 //guardar datos de session
 $this->session->set($datos);
 return redirect()->route('formulario_pedido',$data);
 }
 }
 $this->session->setFlashdata('nologin', true);
 
 
 return redirect()->route('forpedido');
    }
 
 //********************************************************************************************************************
 
    // FUNCION PARA EL TEMA DE REGISTROS
 
   
 
    public function guardar2(){

        $carrito = $this->session->get('carrito') ?? [];
    
        // Calcular subtotal, costo de envío y total si es necesario
        $subtotal = 0;
        foreach ($carrito as $item) {
            $subtotal += $item['precio'] * $item['cantidad'];
        }
    
        if($subtotal>=6000000){

            $costoEnvio = 0;
        } else{
            $costoEnvio = 500000;
        
        }    
        $total = $subtotal + $costoEnvio;
    
        // Pasa el carrito, subtotal, costo de envío y total a la vista
        $data = [
            'carrito' => $carrito,
            'subtotal' => $subtotal,
            'costoEnvio' => $costoEnvio,
            'total' => $total,
        ];


     $productoModel = new \App\Models\Producto();
     $data['productos'] = $productoModel->findAll();
 
    //variables parfa guardar los nombres del formulario
    $nombre_apellido=$this->request->getpost("nombre_apellido");
    $correo=$this->request->getpost("correo_registro");
    $contraseña=password_hash(strval($this->request->getpost("contraseña_registro")), PASSWORD_DEFAULT);
 // Cargar el modelo
 $usuarioModel = model('usuario');
 //primer  valor: columnas de la base de dato/ segundo valor: datos que vienen del formulario
 $datos= array(
    "nombre_apellido"=>$nombre_apellido,
    "correo"=>$correo,
    "contraseña"=>$contraseña
 
 );
    $resultado=$usuarioModel->getWhere(['correo'=>$correo]);
    if(!$resultado->getResult()){
    //si hay datos
 
    }
    else {   
    // si no hay datos
    $this->session->setFlashdata('error', true);
    return redirect()->route('');
    }
 
    if ($usuarioModel->insert($datos)) {
 
 // Después del registro exitoso, establece el nombre del usuario en la sesión
 
        $datosSession = [
            'id' => $usuarioModel->getInsertID(),
            'usuario' => $nombre_apellido,
        ];
    
        $this->session->set($datosSession);

       
 
        return view('usuario/pedidoFormular',$data);

    }
  
 }
 
 
 public function cerrar_sesion2(){
 
    $this->session->remove("Id");
    $this->session->remove("usuario");
    return redirect()->route('inicio');
 
   }




 public function formulario_pedido()
 
 {
 // Obtén el carrito actual de la sesión
 $carrito = $this->session->get('carrito') ?? [];
    
 // Calcular subtotal, costo de envío y total si es necesario
 $subtotal = 0;
 foreach ($carrito as $item) {
     $subtotal += $item['precio'] * $item['cantidad'];
 }

 if($subtotal>=3000000){

     $costoEnvio = 0;
 } else{
     $costoEnvio = 500000;
 
 }    
 $total = $subtotal + $costoEnvio;

 // Pasa el carrito, subtotal, costo de envío y total a la vista
 $data = [
     'carrito' => $carrito,
     'subtotal' => $subtotal,
     'costoEnvio' => $costoEnvio,
     'total' => $total,
 ];


    return view('usuario/pedidoFormular',$data);

}

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


public function finalizarCompra()
{

   
// Obtener datos del pedido utilizando la función del modelo
$pedido_model = new \App\Models\Pedido();
 
  
$datosPedido = $pedido_model->construirdatospedido();

// Insertar los datos en la base de datos
$pedido_model->insert($datosPedido);


  session()->remove('carrito');
    session()->remove('datosPedido');

  return redirect()->to('inicio');

}


public function cancelarCompra()
{
    // Elimina la información de la sesión relacionada con la compra
    session()->remove('carrito');
    session()->remove('datosPedido');
    session()->remove('metodo_pago_seleccionado');
    session()->remove('datosProcesarComun');
    session()->remove('datosProcesarNequi');
    session()->remove('datosProcesarBancolombia');

    // Redirige al carrito con un mensaje de cancelación
    return redirect()->to('inicio')->with('mensaje', 'Compra cancelada exitosamente.');
}

public function pedidofinal()
{
    $productoModel = new \App\Models\Producto();
    $data['productos'] = $productoModel->findAll();

    // Llamo a la función para construir los datos del pedido
    $datosPedido = $this->construirdatospedido();


    // Pasa los datos del pedido y los productos a la vista
    return view('usuario/pedido', [
        'datosPedido' => $datosPedido,
        'productos' => $data['productos']
    ]);
}


public function editar($id)
    {
        $model = new \App\Models\producto(); // Ajusta el nombre del modelo según tu aplicación

        // Obtiene los detalles del producto para mostrar en el formulario de edición
        $data['producto'] = $model->find($id);

        return view('productos/editar_producto', $data);
    }

    public function actualizar($id)
    {
        $model = new \App\Models\producto(); // Ajusta el nombre del modelo según tu aplicación

        // Lógica para actualizar el producto con los datos proporcionados en el formulario
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'precio_actual' => $this->request->getPost('precioactual'),
            'precio_anterior' => $this->request->getPost('precioanterior'),  /*<-- NOMBRES DEL FORMULARIO*/ 
            'descripcion' => $this->request->getPost('descripcion'),
            'categoria' => $this->request->getPost('categoria'),
            'imagen' => $imagenDatos,

        ];

        // Actualiza el producto
        $model->update($id, $data);

        // Después de actualizar, redirige a la página de productos o realiza cualquier otra acción necesaria
        return redirect()->to(site_url('/'));
    }




public function eliminar($id)
    {
        // Lógica para eliminar el producto con el ID proporcionado
        $model = new \App\Models\producto(); // Ajusta el nombre del modelo según tu aplicación

        // Verifica si el producto existe antes de intentar eliminarlo
        $producto = $model->find($id);
       

        // Realiza la eliminación
        $model->delete($id);

        // Después de eliminar, redirige a la página de productos o realiza cualquier otra acción necesaria
        return redirect()->to(site_url('tabla'));
    }
 public function blog(){
            return view('usuario/blog');
        
        }


        public function guardar_districo()
           {
        // Carga el modelo de contacto
        $contactoModel = model('ContactoModel');

        // Obtén los datos de la base de datos
        $data['mensajes'] = $contactoModel->findAll(); 
        
        // Carga la vista del dashboard y pasa los datos
        return view('dashboard', $data);   }

        
    public function sobre(){
        return view('usuario/sobre');

    }


    public function contactanos():string{
        return view('usuario/contact');

    }


    public function inicio2(){
        return view('usuario/inicio2');

    }

    public function lista(){
        return view('usuario/listapro');

    }

    public function filtro(){
        $productoModel = new \App\Models\Producto();
        $data['productos'] = $productoModel->findAll();
        $categoriaModel = new \App\Models\categoria(); 
        $data['categoria'] = $categoriaModel->findAll();
      
    $productos = $this->request->getPost('productos');
    $presupuesto = $this->request->getPost('presupuesto');


    if($productos == '1' && $presupuesto == '1') {
        // si el destino y presupuesto seleccionados son "Todos"
        return view('usuario/Frutas', $data);
     
    }
        if($productos == '2' && $presupuesto == '1') {
            // si el destino y presupuesto seleccionados son "nuqui y 600.000"
            return view('usuario/verduras', $data);
        
        }
        if($productos == '3' && $presupuesto == '1') {
            // si el destino y presupuesto seleccionados son "nuqui
            return view('usuario/bebidas',$data);
        
        }
        if($productos == '4' && $presupuesto == '1') {
            // si el destino y presupuesto seleccionados son "nuqui y 7s00.000"
            return view('usuario/Aseop', $data);
        
        }
        if($productos == '5' && $presupuesto == '1') {
            // si el destino y presupuesto seleccionados son "nuqui y 7s00.000"
            return view('usuario/Arinas', $data);
        
        }
        
    if($productos == $productos && $presupuesto == $presupuesto) {
        // si el destino y presupuesto seleccionados son "Todos"
        return view('usuario/inicio', $data);
     
    }
    }
   
}
 