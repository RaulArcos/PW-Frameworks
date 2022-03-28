<?php if(! empty($articulos) && is_array($articulos)) : 
    foreach ($articulos as $articulos_item): ?>

    <h3><?= esc($articulos_item['title']); ?></h3>
    <div class="main">
        <?= esc($articulos_item['cuerpo']); ?>
    </div>

    <p><a href="/articulo/<?= esc($articulos_item['id'], 'url'); ?>">View article</a></p>

    <?php endforeach;
else : ?>
    <h3>No Articulo</h3>
    <p>No hay articulos</p>
<?php endif ?>
