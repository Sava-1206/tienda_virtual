<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center p-3">Eliminar Producto</h1>
        <p>¿Estás seguro de que deseas eliminar el producto: <strong><?php echo $producto['nombre']; ?></strong>?</p>
        <form method="POST" action="tienda_virtual/public/index.php?controller=producto&action=eliminar&id=<?php echo $producto['id_producto']; ?>">
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            <a href="tienda_virtual/public/index.php?controller=producto&action=listar" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
