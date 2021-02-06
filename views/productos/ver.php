<?php if (isset($produc)) : ?>
    <h1><?= $produc->nombre ?></h1>
    <?php if($produc->imagen != null): ?>
    <img src="<?=base_url?>uploads/images/<?=$produc->imagen?>"/>
    <?php else :?>
    <img src="<?=base_url?>assets/img/camiseta.png"/>
    <?php endif; ?>

        <p><?=$produc->descripcion?></p>
        <p><?=$produc->precio?></p>
        <a href="#" class="button">comprar</a>
 
<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>


