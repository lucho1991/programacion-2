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
        require "./../../funcionabilidad/acciones_para_materias.php";
        $materias = new materias();
        $materia = $materias->listar_materia_por_id($_GET['id']);
    ?>
    <form method="POST" action="./../../funcionabilidad/acciones_para_materias.php">
        <h2><font face="Century Gothic">Ingrese los datos a guardar en base de datos</font></h2>
        <label>Id </label><br>
        <input type="text" id="id" name="id"  value="<?php echo $materia['id'] ?>" readonly><br>
        <label>Nombre de la materia </label><br>
        <input type="text" name="nombre" value=<?php echo $materia['nombre']?> ><br>
        <label>Año en cual se dicta</label><br>
        <input type="number" min="1" max="10" name="curso" value=<?php echo $materia['curso']?> ><br>
        <label>Carrera a la que pertenece</label><br>
        <input type="text" name="carrera" value=<?php echo $materia['carrera']?>><br>
        <br>
        <input type="submit" name="modificar" value="modificar"> 
        <br>

        <br>



        
    <body>
        <html>
