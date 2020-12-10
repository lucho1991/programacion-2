<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST['nombre'];
	$curso = $_POST['curso'];
	$carrera = $_POST['carrera'];

	$materias = new materias();

    if (isset($_POST['modificar'])) {
		$id = $_POST['id'];
	 	echo 'modificar';
		$materias->modificar_materia($id, $nombre, $curso, $carrera);
	} else {
		echo 'agregar';
		$materias->agregar_materia($nombre, $curso, $carrera);
	}
}


class materias{
	private $db;
	private $materias;

	public function __construct(){
		require $_SERVER['DOCUMENT_ROOT']."/programacion-2/proyecto-final/base_de_datos/db_connect.php";

        $this->db=Conectar::conexion();
        $this->materias=array();
    }
    

	public function agregar_materia($nombre, $curso, $carrera){
	    $consulta_insertar_materia = "INSERT INTO materias (nombre, curso, carrera)
	                VALUES ('$nombre' ,'$curso', '$carrera')";
	    $resultado = $this->db->query($consulta_insertar_materia);
	    if ($resultado){
	    	echo "Datos insertados";
	    	HEADER("location:./../vistas/materias/lista_materias.php");
	    } else {
	    	echo "Los datos no se pudieron insertar";
	    }

	}

	public function modificar_materia($id, $nombre, $curso, $carrera){
	    $consulta_modificar_materia = "UPDATE materias SET nombre = '$nombre',curso='$curso',carrera='$carrera'
                WHERE id= '$id';";
	    $resultado = $this->db->query($consulta_modificar_materia);
	    if ($resultado){
	    	echo "Datos modificados";
	    	HEADER("location:./../vistas/materias/lista_materias.php");
	    } else {
	    	echo "Los datos no se pudieron modificar";
	    }
	}


	public function listar_materias(){
		$consulta_listar_materias = "SELECT * FROM materias;";
        $consulta=$this->db->query($consulta_listar_materias);
        while($filas=$consulta->fetch_assoc()){
            $this->materias[]=$filas;
        }
        return $this->materias;
    }


	public function listar_materia_por_id($id){
		$consulta_listar_materias = "SELECT * FROM materias WHERE id = '$id';";
        $consulta=$this->db->query($consulta_listar_materias);
        return $consulta->fetch_assoc();
    }
}

?>