<?php if (isset($categoria)) : ?>
    <h1><?= $categoria->nombre ?></h1>
    
    <?php if ($productos->num_rows == 0) : ?>
        <p>No hay productos que mostrar</p>
    <?php else : ?>

        <?php while ($produc = $productos->fetch_object()) : ?>
            <div class="product">
                <?php if ($produc->imagen != null): ?>
                    <img src="<?= base_url ?>uploads/images/<?= $produc->imagen ?>"/>
                <?php else : ?>
                    <img src="<?=base_url?>assets/img/camiseta.png"/>
                <?php endif; ?>

                <h2><?= $produc->nombre ?></h2>
                <p><?= $produc->precio ?></p>
                <a href="#" class="button">comprar</a>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>

<?php else : ?>
    <h1>No existe la categoria</h1>
<?php endif; ?>


