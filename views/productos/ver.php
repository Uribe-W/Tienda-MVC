<?php if (isset($produc)) : ?>
    <h1><?= $produc->nombre ?></h1>
    <div id="detail-product">
        <div class="image">
            <?php if ($produc->imagen != null): ?>
                <img src="<?= base_url ?>uploads/images/<?= $produc->imagen ?>"/>
            <?php else : ?>
                <img src="<?= base_url ?>assets/img/camiseta.png"/>
            <?php endif; ?>
        </div>
        <div class="data" >
            <p class="descripcion"><?= $produc->descripcion ?></p>
            <p class="price"><?= $produc->precio ?></p>
            <a href="#" class="button">comprar</a>
        </div>
    </div>
<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>


