<?php
require_once "ModelPDO.php";
require_once "Clases/Usuario.php";

class controlador extends ModelPDO {

	public function __construct(){
	
		$usuario = $this->checkuser($_GET["login"],$_GET["password"]);

		echo $usuario->getID() . "<br />";
		echo $usuario->getLogin() . "<br />";
		echo $usuario->getPassword() . "<br />";
	}

	public function checkuser($login,$password){

		$oDB = $this->getDBO();

		$query = $oDB->query("SELECT * FROM usuario WHERE login = '{$login}' AND password = '{$password}'");

		$oUSer = $query->fetchObject("Usuario");

		return $oUSer;
	}

	public function users(){

		$oDB = $this->getDBO();

		$query = $oDB->query("SELECT * FROM usuario");
		$users = $query->fetchAll(PDO::FETCH_CLASS,"Usuario");
		//$users es un array
		//la clase usuario no puede tener constructor
		

		return $users;
        }

}