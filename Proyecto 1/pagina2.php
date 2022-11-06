<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion con el Codigo de MYSQL </title>
</head>
<body>
<?php
$conexion1 = mysqli_connect("localhost", "root", "", "conexion1") or
die("Problemas con la conexión");

mysqli_query($conexion1, "insert into alumnos(codigo,nombres,correo,codigocurso) values
                        ($_REQUEST[codigo],'$_REQUEST[nombres]','$_REQUEST[correo]',$_REQUEST[codigocurso])")
or die("Problemas en el select" . mysqli_error($conexion1));

mysqli_close($conexion1);

echo "El alumno fue Ingresado al Curso Seleccionado ";
?>
</body>
</html>
