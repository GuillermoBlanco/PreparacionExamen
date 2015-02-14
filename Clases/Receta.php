<?php

/**
 * Description of Receta
 *
 * @author Melliw
 */
class Receta {

    	private $id;
	private $imagen;
	private $ingredientes;
        
        public function getId() {
            return $this->id;
        }

        public function getImagen() {
            return $this->imagen;
        }

        public function getIngredientes() {
            return $this->ingredientes;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        public function setIngredientes($ingredientes) {
            $this->ingredientes = $ingredientes;
        }


}
