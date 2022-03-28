<h2><?php esc($title); ?></h2>
<?php \Config\Services::validation()->listErrors(); ?>
<form action="/articulo/create" method="post">

    <?php csrf_field() ?>
    <label for="title">Titulo</label>
    <input type="input" name="title">
    <br><br><br>

    <label for="descripcion" minlength="3" maxlength="255">Descripcion</label>
    <textarea name="descripcion" ></textarea>
    <br><br><br>

    <label for="cuerpo">Cuerpo</label>
    <textarea name="cuerpo" minlength="3" maxlength="255"></textarea>
    <br><br><br>

    <input type="submit" name="submit" value="Creacion de un item articulo">

</form>
