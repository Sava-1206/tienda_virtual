<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    private $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    public function index() {
        $productos = $this->producto->obtenerTodos();
        require_once __DIR__ . '/../views/productos/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->producto->crear($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock']);
            
            $_SESSION['mensaje'] = "Producto agregado exitosamente";
            
            header('Location: /tienda_virtual/public/');
exit();

        }
    
        require_once __DIR__ . '/../views/productos/crear.php';
    }
    

    public function editar($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->producto->actualizar($id, $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock']);
            
            header('Location: /tienda_virtual/public/');
            exit(); 
        }
    
        $producto = $this->producto->obtenerPorId($id);
        
        if (!$producto) {
            echo "Producto no encontrado.";
            return;
        }
    
        require_once __DIR__ . '/../views/productos/editar.php';
    }
    
    

    public function eliminar($id) {
        if ($id) {
            $this->producto->eliminar($id);
            header('Location: /tienda_virtual/public/');
            exit();
        } else {
            echo "Error: ID no válido para eliminar.";
        }
    }
    

}
?>

