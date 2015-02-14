<?php

/**
 * Description of Contacto
 *
 * @author Melliw
 */
class Contacto {

    	private $id;
	private $email;
	private $asunto;
	private $texto;
        
        public function getId() {
            return $this->id;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getAsunto() {
            return $this->asunto;
        }

        public function getTexto() {
            return $this->texto;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setAsunto($asunto) {
            $this->asunto = $asunto;
        }

        public function setTexto($texto) {
            $this->texto = $texto;
        }


}
