<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>


<?php 
 include_once __DIR__ . "/../templates/alertas.php";
?>
<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
    <label for="password">Password</label>
    <input
        type="password"
        id="password"
        name="password"
        placeholder="Tu nuevo Password"
        />
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/login">¿Ya tienes cuenta? Inicia Sesión.</a>
    <a href="/login">Aún no tienes cuenta? Obten una.</a>
</div>