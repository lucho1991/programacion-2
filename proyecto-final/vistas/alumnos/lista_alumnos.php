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
                <td>Apellido</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo Electrónico</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>  
            <?php

            require "./../../funcionabilidad/acciones_para_alumnos.php";
            $alumnos = new alumnos();
            $listado_alumnos = $alumnos->listar_alumnos();
            
            foreach ($listado_alumnos as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['apellido'] ?></td>
                    <td><?php echo $key['nombres'] ?></td>
                    <td><?php echo $key['edad'] ?></td>
                    <td><?php echo $key['email'] ?></td>

                    <td><?php echo'<a href="' . htmlspecialchars("modificar_alumno.php?id=" .urlencode($key['id'])) . '" style="color:white;"><font face="Century Gothic">Modificar</font></a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>
    <body>
        <html>


<a href=view_exp.php?compna=",urlencode($compname),"