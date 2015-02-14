<?php

/**
 * Description of Usuario
 *
 * @author Melliw
 */
class Usuario {

    	private $id;
	private $login;
	private $nombre;
	private $apellidos;
	private $email;
	private $rol;
	private $autonomia;
	private $pass;
        
        public function getId() {
            return $this->id;
        }

        public function getLogin() {
            return $this->login;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getRol() {
            return $this->rol;
        }

        public function getAutonomia() {
            return $this->autonomia;
        }

        public function getPass() {
            return $this->pass;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setRol($rol) {
            $this->rol = $rol;
        }

        public function setAutonomia($autonomia) {
            $this->autonomia = $autonomia;
        }

        public function setPass($pass) {
            $this->pass = $pass;
        }


}
