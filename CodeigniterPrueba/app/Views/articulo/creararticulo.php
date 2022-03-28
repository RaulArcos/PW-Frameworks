<h2><?= esc($title); ?></h2>
<?= \Config\Services::validation()->listErrors(); ?>
<form action="/articulo/create" method="post">
    <?= csrf_field() ?>
    <label for="title">Titulo</label>
    <input type="input" name="title" /><br />
    <br></br>

    <label for="descripcion">Description</label>
    <textarea name="descripcion"></textarea><br />
    <br></br>

    <label for="cuerpo">Cuerpo</label>
    <textarea name="description"></textarea><br />
    <br></br>

    <input type="submit" name="submit" value="Create articulo item" />
</form>
