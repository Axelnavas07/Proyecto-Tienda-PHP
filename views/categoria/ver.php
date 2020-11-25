<?php if (isset($categoria)) : ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0) : ?>
        <p>No hay productos para mostrar</p>
    <?php else : ?>
        <?php while ($prod = $productos->fetch_object()) : ?>
            <div class="product">
                <?php if ($prod->imagen != null) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
                <?php else : ?>
                    <img src="<?=base_url?>assets/img/camiseta.png">
                <?php endif; ?>
                <h3><?= $prod->nombre ?></h3>
                <p><?= $prod->precio ?></p>
                <a href="" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php else : ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>