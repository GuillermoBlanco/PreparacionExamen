<?php
require_once "ModelPDO.php";
require_once "Clases/espectacles.php";
require_once "Clases/representacions.php";

class controlador extends ModelPDO {

    
        public function getEspectacles(){

		$oDB = $this->getDBO();

		$query = $oDB->query( 'SELECT * FROM espectacles');

		$espectacles = $query->fetchAll(PDO::FETCH_CLASS,"espectacles");

		return $espectacles;
	}
        
        public function getEspectacle($codi){

		$oDB = $this->getDBO();

		$query = $oDB->query( 'SELECT * FROM espectacles WHERE Codi='.$codi);

		$espectacle = $query->fetchObject("espectacles");

		return $espectacle;
	}
        
        public function getRepresentacion($codiEspectacle,$data,$hora){

		$oDB = $this->getDBO();

		$query = $oDB->query( "SELECT * FROM representacions WHERE Codi_Espectacle='".$codiEspectacle."' AND Data='".$data."' AND Hora='".$hora."'");

		$espectacle = $query->fetchObject("representacions");

		return $espectacle;
	}
        
        public function getRepresentacions($codi){

		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM representacions WHERE Codi_Espectacle='.$codi);

		$representacions = $query->fetchAll(PDO::FETCH_CLASS,"representacions");

		return $representacions;
	}
        
//	public function users(){
//
//		$oDB = $this->getDBO();
//
//		$query = $oDB->query("SELECT * FROM usuario");
//		$users = $query->fetchAll(PDO::FETCH_CLASS,"Usuario");
//		//$users es un array
//		//la clase usuario no puede tener constructor
//		
//
//		return $users;
//        }

}