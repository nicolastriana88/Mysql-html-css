<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion1 = mysqli_connect("localhost", "root", "",
"conexion1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion1, "select codigo
from alumnos
where codigo=$_REQUEST[codigo]") or
die("Problemas en el select:" .
mysqli_error($conexion1));
if ($reg = mysqli_fetch_array($registros)) {
mysqli_query($conexion1, "delete from alumnos
where codigo=$_REQUEST[codigo]") or
die("Problemas en el select:" .
mysqli_error($conexion1));
echo "Se efectuó el borrado del alumno con el
codigo digitado.";
} else {
echo "No existe un alumno con ese codigo lo
siento intente con otro.";
}
mysqli_close($conexion1);
?>
</body>
</html>