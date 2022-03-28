<?= \Config\Services::validation()->listErrors (); ?>
<form action="/usuario/create" method="post">
    <?= csrf_field() ?>
    <label for="name">Nombre</label>
    <input type="input" name="name" /><br />
    <br></br>
    <label for="correo">Corrreo</label>
      <input type="input" name="correo" /><br />
    <br></br>
     <label for="user">Usuario</label>
     <input type="input" name="user" /><br />
    <br></br>
     <label for="pass">Contraseña</label>
     <input type="input" name="pass" /><br />
    <br></br>
      <label for="pass2"> Repetir Contraseña</label>
     <input type="input" name="pass2" /><br />
    <br></br>
    <input type="submit" name="submit" value="Create usuario item" />
    <p><a href="/">Inicio Sesión</a></p>
</form>