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
                <td>Nombre</td>
                <td>Curso</td>
                <td>Carrera</td>
                <td>Modificar</td>
            </tr>  
            <?php

            require "./../../funcionabilidad/acciones_para_materias.php";
            $alumnos = new materias();
            $listado_materias = $alumnos->listar_materias();
            
            foreach ($listado_materias as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['nombre'] ?></td>
                    <td><?php echo $key['curso'] ?></td>
                    <td><?php echo $key['carrera'] ?></td>

                    <td><?php echo'<a href="' . htmlspecialchars("modificar_materia.php?id=" .urlencode($key['id'])) . '" style="color:white;"><font face="Century Gothic">Modificar</font></a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>
    <body>
        <html>


<a href=view_exp.php?compna=",urlencode($compname),"