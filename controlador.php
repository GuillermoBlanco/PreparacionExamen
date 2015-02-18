<?php
require_once "ModelPDO.php";
require_once "Clases/espectacles.php";
require_once "Clases/representacions.php";
require_once "Clases/recintes.php";
require_once "Clases/zones_recinte.php";
require_once "Clases/entrades.php";
require_once "Clases/seients.php";
require_once "Clases/espectadors.php";

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
        
        public function getRecinto($codi){

		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM recintes WHERE Codi='.$codi);

		$recinto = $query->fetchObject("recintes");

		return $recinto;
	}

        public function getZonas($codiRecinte){

		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM zones_recinte WHERE Codi_Recinte='.$codiRecinte);

		$zonas = $query->fetchAll(PDO::FETCH_CLASS,"zones_recinte");

		return $zonas;
	}

        public function getAsientos($codiRecinte, $zona){

		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM seients WHERE Codi_Recinte='.$codiRecinte.' AND Zona="'.$zona.'"');

		$asientos = $query->fetchAll(PDO::FETCH_CLASS,"seients");

		return $asientos;
	}

        public function countAsignados($representacion,$recinte,$zona){
		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT count(*) FROM entrades WHERE Codi_Espectacle='.$representacion->getCodiEspectacle().' AND Data="'.$representacion->getData().'" AND Hora="'.$representacion->getHora().'" AND Zona="'.$zona.'"');

		$entrades = $query->fetch(PDO::FETCH_NUM);

		return $entrades[0];
	}
        
        public function getAsignados($representacion,$recinte,$zona){
		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT Codi_Recinte,Zona,Fila,Numero FROM entrades WHERE Codi_Espectacle='.$representacion->getCodiEspectacle().' AND Data="'.$representacion->getData().'" AND Hora="'.$representacion->getHora().'" AND Zona="'.$zona.'"');

		$asientos = $query->fetchAll(PDO::FETCH_CLASS,"seients");

		return $asientos;
	}
        
        public function getUsuario($dni){
		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM espectadors WHERE DNI='.$dni);

		$usuario = $query->fetchObject("espectadors");

		return $usuario;
	}
        
        public function getEntradasUsuario($dni){
		$oDB = $this->getDBO();

		$query = $oDB->query('SELECT * FROM entrades WHERE DNI_Client='.$dni);

		$entradas = $query->fetchAll(PDO::FETCH_CLASS,"entrades");

		return $entradas;
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