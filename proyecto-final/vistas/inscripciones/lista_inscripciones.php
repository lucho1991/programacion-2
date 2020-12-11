<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Datos</title>
    <link rel="stylesheet" href="./estilos.css"/>
</head>
<body style="background-color:#88B04B";>


        <h2>Estos son los datos que hay actualmente</h2><br>
        ­<table>
            <tr>
                <td>ID</td>
                <td>Nombre del alumno</td>
                <td>Registrado en</td>
                <td>Carrera</td>
                <td>Eliminar</td>
            </tr>  
            <?php

            require "../../funcionabilidad/gestion_inscripciones.php";
            $inscripciones = new inscripciones();
            $listado_inscriptos = $inscripciones->listar_inscripciones();
            
            foreach ($listado_inscriptos as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['nombre_alumno'] ?></td>
                    <td><?php echo $key['nombre_materia'] ?></td>
                    <td><?php echo $key['carrera_materia'] ?></td>

                    <td><?php echo'<a href="' . htmlspecialchars("eliminar_inscripcion.php?id=" .urlencode($key['id'])) . '" style="color:white;"><font face="Century Gothic">Eliminar</font></a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>

            <h5><a href="../../index.html">Ir al inicio</a></h5>

    <body>
        <html>


<a href=view_exp.php?compna=",urlencode($compname),"