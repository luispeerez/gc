<?php 
class conexion{
	//private constant USUARIO = "root";
	private $usuario = "root";
	private $contrasena = "1234";
	private $host = "localhost";
	private $basedatos = "gamecentral";
	private $conex;

	public function getConex(){
		if($this->conex == null) $this->makeConex();
		return $this->conex;
	}

	public function setConex($con){
		$this->conex = $con;
	}

	public function __construct(){
		$this->makeConex();
	}

	public function makeQuery($qry){
		return mysql_query($qry,$this->conex);
	}

	public function makeArray($rs){
		return mysql_fetch_array($rs);
	}

	public function close(){
		mysql_close($this->conex);
	}

	private function makeConex(){
		$this->conex  = @mysql_connect($this->host,$this->usuario,$this->contrasena) or die("Error al conectarse");
		@mysql_select_db($this->basedatos,$this->conex) or die("No se pudo seleccionar la BD");	
	}
}

?>