<?php include __DIR__ . '/../../layouts/header.php'; ?>

<h1>Editar Producto</h1>

<?php if (isset($mensaje)): ?>
    <p><?= htmlspecialchars($mensaje) ?></p>  
<?php endif; ?>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
    <label>Descripción:</label>
    <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br>
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
    <label>Stock:</label>
    <input type="number" name="stock" value="<?= $producto['stock'] ?>" required><br>
    <button type="submit">Actualizar</button>
</form>


<?php include __DIR__ . '/../../layouts/footer.php'; ?>
