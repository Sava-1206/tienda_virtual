<?php
require_once __DIR__ . '/../app/controllers/ProductoController.php';

$controller = new ProductoController();

$action = $_GET['action'] ?? 'index'; 

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

switch ($action) {
    case 'crear':
        $controller->crear();
        break;
    case 'editar':
        if ($id) { 
            $controller->editar($id); 
        } else {
            echo "Error: ID no válido para editar."; 
        }
        break;
    case 'eliminar':
        if ($id) { 
            $controller->eliminar($id); 
        } else {
            echo "Error: ID no válido para eliminar."; 
        }
        break;
    default:
        $controller->index(); 
        break;
}
?>
