<html>
<head>
<title>Pagina para conexion con base de datos </title>
</head>
<style>
    h2,h3,h4,h5{
font-family:verdana;
color: #00ff00;
    }

    h1,h6{
font-family:verdana;
color: #782bf3;
    }
    </style>
<body>
<h1>Ingreso de Alumnos </h1>
<h2>Ingreso de Alumnos </h2>
<h3>Ingreso de Alumnos </h3>
<h4>Ingreso de Alumnos </h4>
<h5>Ingreso de Alumnos </h5>
<h6>Ingreso de Alumnos </h6>
<h1 style="color:#ff0000;background-color:#ffff00">
    - REGISTRO DE ALUMNOS -.
  </h1>
<form action="pagina2.php" method="post">
Ingrese el codigo del Alumno: 
<input type="text" name="codigo"><br>
Ingrese nombres :
<input type="text" name="nombres"><br>
Ingrese Correo :
<input type="text" name="correo"><br>
Seleccione el curso :
<select name="codigocurso">
<option value="1">PHP</option>
<option value="2">ASP</option>
<option value="3">JSP</option>
<option value="4">OTRO</option>
</select>
<br>
<input type="submit" value="Registrar">
</form>
</body>