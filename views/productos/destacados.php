
<h1>Algunos de nuestros Productos</h1>

<?php while($produc = $productos->fetch_object()) :?>
<div class="product">
    <?php if($produc->imagen != null): ?>
    <img src="<?=base_url?>uploads/images/<?=$produc->imagen?>"/>
    <?php else :?>
    <img src="<?=base_url?>assets/img/camiseta.png"/>
    <?php endif; ?>
    
    <h2><?=$produc->nombre?></h2>
    <p><?=$produc->precio?></p>
    <a href="#" class="button">comprar</a>
</div>

<?php endwhile; ?>
