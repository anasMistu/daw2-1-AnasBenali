<?php
require_once "_varios.php";
/*Si no hay session iniciada redirigimos a la pagina de CONTENIDO PRIADO 1*/
if (haySesionIniciada()) {
    redireccionar("ContenidoPrivado1.php");
}
?>




<html>

<head>
    <meta charset='UTF-8'>
</head>



<body>

<h1>Iniciar Sesión</h1>
<?php
if(isset($_SESSION["txto"])){
?>
<p><?= $_SESSION["txto"]?></p>

<?php
    unset($_SESSION["txto"]);
}
?>
<div class="formulario">
    <form method="post" action="SesionInicioComprobar.php">
        <input type="text" name="identificador" placeholder="Introduce tu usuario" required><br><br>
        <input type="password" name="contrasenna" placeholder="Introduce tu contraseña" required><br><br>
        Recuerdame: <input type='checkbox' name='recordar' id='recordar'><br><br>
        <input type="submit" name="Iniciar Session" value="Iniciar Session">
    </form>
</div>

</body>

</html>
