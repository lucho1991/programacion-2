<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Datos</title>
    <link rel="stylesheet" href="./estilos.css"/>
</head>
<body style="background-color:#88B04B";>
    <br>
    <?php
        require_once "../../funcionabilidad/acciones_para_alumnos.php";
        $alumnos = new alumnos();
        $alumno = $alumnos->listar_alumno_por_id($_GET['id']);
    ?>
    <form method="POST" action="../../funcionabilidad/acciones_para_alumnos.php" > 
        <h2><font face="Century Gothic">Ingrese los datos a guardar en base de datos</font></h2>
        <label>Id </label><br>
        <input type="text" id="id" name="id"  value="<?php echo $alumno['id'] ?>" readonly><br>
        <label>Apellido </label><br>
        <input type="text" name="apellido" value=<?php echo $alumno['apellido']?>><br>
        <label>Nombre </label><br>
        <input type="text" name="nombre" value=<?php echo $alumno['nombres']?> ><br>
        <label>Edad </label><br>
        <input type="number" name="edad" min="1" value=<?php echo $alumno['edad']?> ><br>
        <label>Correo </label><br>
        <input type="email" name="email" value=<?php echo $alumno['email']?>><br>
        <br>
        <input type="submit" name="modificar" value="modificar"> 
        <br>

        <br>



                <h5><a href="../../index.html">Ir al inicio</a></h5>

    <body>
        <html>
