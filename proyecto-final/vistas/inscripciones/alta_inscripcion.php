<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscripcion de alumnos</title>
    <link rel="stylesheet" href="./estilos.css"/>
</head>
<body style="background-color:#88B04B";>
    <br>

    <?php
        require_once  "../../funcionabilidad/acciones_para_materias.php";
        $materias = new materias();
        $materia = $materias->listar_materias_acotada();

        require_once  "../../funcionabilidad/acciones_para_alumnos.php";
        $alumnos = new alumnos();
        $alumno = $alumnos->listar_alumnos_acotada();
    ?>
    <form method="POST" action="../../funcionabilidad/gestion_inscripciones.php" >
        <h2><font face="Century Gothic">Gestion de inscripciones de alumnos en materias</font></h2>
        <label> Seleccione un alumno<label>
        <select id="materias_id" name="materias_id">  
        <?php  foreach ($materia as $key) { ?>
            <option value =<?php echo $key['id'] ?> > <?php echo $key['nombre'] ?></option>
        <?php }  ?>
        </select>


        <label> Seleccione un alumno<label>
         <select id="alumnalumnos_ido_id" name="alumnos_id">  
        <?php  foreach ($alumno as $key) { ?>
            <option value =<?php echo $key['id'] ?> > <?php echo $key['apellidoynombre'] ?></option>
        <?php }  ?>
        </select>

        <input type="submit" name="inscribir" value="Inscribir"> 
        <br><br>
        <h5><a href="../../index.html">Ir al inicio</a></h5>

    <body>
<html>
