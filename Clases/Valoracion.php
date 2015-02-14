<?php

/**
 * Description of Valoracion
 *
 * @author Melliw
 */
class Valoracion {

    	private $usuario;
	private $multimedia;
	private $valoracion;
        
        public function getUsuario() {
            return $this->usuario;
        }

        public function getMultimedia() {
            return $this->multimedia;
        }

        public function getValoracion() {
            return $this->valoracion;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        public function setMultimedia($multimedia) {
            $this->multimedia = $multimedia;
        }

        public function setValoracion($valoracion) {
            $this->valoracion = $valoracion;
        }


}
