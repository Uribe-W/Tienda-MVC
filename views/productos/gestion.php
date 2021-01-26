<h1>Gestinar productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    Crear productos
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<strong class="alert_green">El Producto se ha Creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
<strong class="alert_red">El Producto No se ha Creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto')?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<strong class="alert_green">El Producto se ha Borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'faile'): ?>
<strong class="alert_red">El Producto No se ha Borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete')?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE<th>
        <th>PRECIO<th>
        <th>STOCK<th>
        <th>ACCIONES<th>
    </tr>
    
    <?php while($pro = $productos->fetch_object()): ?>
    <tr>
        <td><?=$pro->id;?></td>
        <td><?=$pro->nombre;?><td>
        <td><?=$pro->precio;?><td>
        <td><?=$pro->stock;?><td>
        <td>
            <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-gestion">Editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a>
        <td>
    </tr>
    <?php endwhile; ?>
</table>