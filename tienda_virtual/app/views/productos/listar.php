<?php include __DIR__ . '/../../layouts/header.php'; ?>

<h2>Lista de Productos</h2>

<?php if (isset($_SESSION['mensaje'])): ?>
    <p style="color: green;"><?= $_SESSION['mensaje']; ?></p>
    <?php unset($_SESSION['mensaje']); ?> <!-- Limpiar el mensaje después de mostrarlo -->
<?php endif; ?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($productos as $row): ?>
    <tr>
        <td><?= $row['id_producto'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['descripcion'] ?></td>
        <td><?= $row['precio'] ?></td>
        <td><?= $row['stock'] ?></td>
        <td>
            <a href="/tienda_virtual/public/?action=editar&id=<?= $row['id_producto'] ?>">Editar</a>

            <a href="/tienda_virtual/public/?action=eliminar&id=<?= $row['id_producto'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>

        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
