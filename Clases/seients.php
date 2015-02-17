<?php
/**
 * Description of seients
 *
 * @author Melliw
 */
class seients {

    	private $Codi_Recinte;
	private $Zona;
	private $Fila;
	private $Numero;
        
        public function getCodiRecinte() {
            return $this->Codi_Recinte;
        }

        public function getZona() {
            return $this->Zona;
        }

        public function getFila() {
            return $this->Fila;
        }

        public function getNumero() {
            return $this->Numero;
        }

        public function setCodiRecinte($codiRecinte) {
            $this->Codi_Recinte = $codiRecinte;
        }

        public function setZona($Zona) {
            $this->Zona = $Zona;
        }

        public function setFila($Fila) {
            $this->Fila = $Fila;
        }

        public function setNumero($Numero) {
            $this->Numero = $Numero;
        }


}
