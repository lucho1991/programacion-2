<?php 

    $id = $_GET['id'];

    require_once "../../funcionabilidad/gestion_inscripciones.php";

    $inscripciones = new inscripciones();
    $inscripciones->eliminar_inscripcion_por_id($id);

 ?>