<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion1 = mysqli_connect("localhost", "root", "",
"conexion1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion1, "select
codigo,nombres, correo, codigocurso
from alumnos") or
die("Problemas en el select:" . mysqli_error($conexion1));
while ($reg = mysqli_fetch_array($registros)) {
echo "Codigo:" . $reg['codigo'] . "<br>";
echo "Nombres:" . $reg['nombres'] . "<br>";
echo "Correo:" . $reg['correo'] . "<br>";
echo "Curso:";
switch ($reg['codigocurso'])
{
case 1:
echo "PHP";
break;
case 2:
echo "ASP";
break;
case 3:
echo "JSP";
break;
case 4:
echo "OTROS";
break;
}
echo "<br>";
echo "<hr>";
}
mysqli_close($conexion1);
?>
</body>
</html>