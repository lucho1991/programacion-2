<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$alumnos_id = $_POST['alumnos_id'];
	$materias_id = $_POST['materias_id'];

	$inscripciones = new inscripciones();

	$inscripciones->agregar_inscripcion($alumnos_id, $materias_id);
}


class inscripciones{
	private $db;
	private $inscripciones;

	public function __construct(){
		require $_SERVER['DOCUMENT_ROOT']."/programacion-2/proyecto-final/base_de_datos/db_connect.php";

        $this->db=Conectar::conexion();
        $this->inscripciones=array();
    }
    

	public function agregar_inscripcion($alumno_id, $materia_id){
	    $consulta_insertar_inscripcion = "INSERT INTO inscripciones (alumnos_id, materias_id)
	                VALUES ('$alumno_id','$materia_id' )";
	    $resultado = $this->db->query($consulta_insertar_inscripcion); 
	    
	    if ($resultado){
	    	echo "Datos insertados";
	    	HEADER("location:../vistas/inscripciones/lista_inscripciones.php");
	    } else {
	    	echo "Los datos no se pudieron insertar";
	    	$e = $this->db->error(); // Gets the last error that has occured
			echo $e['message'];
	    }
	}


	public function listar_inscripciones(){
		$consulta_listar_inscripciones = "SELECT  	inscripciones.id, 
													inscripciones.alumnos_id, 
													CONCAT(CONCAT(alumnos.apellido,','),alumnos.nombres) as nombre_alumno, 
											        inscripciones.materias_id, 
											        materias.nombre as nombre_materia,
											        materias.carrera as carrera_materia
											FROM inscripciones 
											INNER JOIN alumnos
											ON alumnos.id = inscripciones.alumnos_id
											INNER JOIN materias
											ON materias.id = inscripciones.materias_id;";

        $consulta=$this->db->query($consulta_listar_inscripciones);
        while($filas=$consulta->fetch_assoc()){
            $this->inscripciones[]=$filas;
        }
        return $this->inscripciones;
    }


	public function listar_inscripcion_por_id($id){
		$consulta_listar_inscripciones = "SELECT * FROM inscripciones WHERE id = '$id';";
        $consulta=$this->db->query($consulta_listar_inscripciones);
        return $consulta->fetch_assoc();
    }


	public function eliminar_inscripcion_por_id($id){
		$consulta_listar_inscripciones = "DELETE FROM inscripciones WHERE id = '$id';";
        $resultado=$this->db->query($consulta_listar_inscripciones);
        if ($resultado){
	    	echo "Datos eliminados";
	    	HEADER("location:./lista_inscripciones.php");
	    } else {
	    	echo "Los datos no se pudieron eliminar";
	    }
    }
}

?>