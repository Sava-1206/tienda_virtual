
<h1>Agregar Producto</h1>

<?php if (isset($mensaje)): ?>
    <p><?= htmlspecialchars($mensaje) ?></p>
<?php endif; ?>

<form method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br><br>
    
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea><br><br>
    
    <label for="precio">Precio:</label>
    <input type="number" step="0.01" name="precio" id="precio" required><br><br>
    
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required><br><br>
    
    <button type="submit">Agregar</button>
</form>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
