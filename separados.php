<h1>Separados</h1>
<hr>
<?php
echo "Esto es lo que se separara:";

if(isset($_POST["codigo"])){
    $codigo=$_POST["codigo"];
    echo  "<h3>Código del producto :".$codigo. "</h3>";
}
if(isset($_POST["descripcion"])){
    $descripcion=$_POST["descripcion"];
    echo  "<h3>Descripcion :".$descripcion. "</h3>";
}
if(isset($_POST["precio"])){
    $precio=$_POST["precio"];
    echo  "<h3>Precio :".$precio. "</h3>";
}

?>
<form action="separadoExito.php" method="post">
<label for="moto">¿Para que moto es?:</label>
<input type="text" name="" id="moto" required>
<hr>
<h2>Datos del cliente y nota de venta</h2>
<label for="nombre">Nombre:</label>
<input type="text" name="" id="nombre" required>
<label for="telefono">Telefono:</label>
<input type="number" name="" id="telefono"required>
<label for="fecha">Fecha:</label>
<input type="date" name="" id="fecha" required>
<label for="fecha">Anticipo:</label>
<input type="number" name="" id="anticipo"  onKeyUp="restar()"required >
Resta:
<input type="submit" value="Hacer separado">
</form>