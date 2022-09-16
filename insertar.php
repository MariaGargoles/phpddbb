
<?php


$servidor="localhost";
$usuario="root";
$clave="";
$bbdd="persona";


$enlace = mysqli_connect($servidor, $usuario, $clave, $bbdd); 

if (!$enlace){
	echo "Error en la conexion con el servidor";
     }
?>


<html>
<head>
<style type= "text/css">


fieldset {
border: thick solid #000;
width: 25em;
}

form{
color: black;
font-family: 'Merienda One', cursive;
text-align: center;
padding: 20px;
font-size: 20px;

}
</style>
</head>


<body>
<fieldset>
<form action="#" class="formulario" name="formulario" method="POST">

DNI <input name="dni" type="text" > 
<br></br>
Nombre  <input type="text" name="nombre" >
<br></br>
Edad <input type="number" name="edad">
<br></br>
Telefono <input type="text" name="telefono">
<br>
</br>
<input type="submit" class="btn" name="insertar" value="registrar" >


</form>
</fieldset>
</body>


</html>

<?php
if(isset($_POST['insertar'])){
	$dni=$_POST["dni"];
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $telefono=$_POST["telefono"];



$insertardatos= "INSERT INTO tabla VALUES('$dni', '$nombre', '$edad', '$telefono')";

$ejecutarinsertar= mysqli_query($enlace, $conexion);

mysqli_close($conexion);

if (!$insertardatos){
echo "Error en la linea de sql";
}
	
}

?>