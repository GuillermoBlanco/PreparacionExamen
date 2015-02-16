<?php
/**
 * Description of preus_espectacles
 *
 * @author Melliw
 */
class preus_espectacles {

    	private $codiEspectacle;
	private $codiRecinte;
	private $Zona;
	private $Preu;
        
        public function getCodiEspectacle() {
            return $this->codiEspectacle;
        }

        public function getCodiRecinte() {
            return $this->codiRecinte;
        }

        public function getZona() {
            return $this->Zona;
        }

        public function getPreu() {
            return $this->Preu;
        }

        public function setCodiEspectacle($codiEspectacle) {
            $this->codiEspectacle = $codiEspectacle;
        }

        public function setCodiRecinte($codiRecinte) {
            $this->codiRecinte = $codiRecinte;
        }

        public function setZona($Zona) {
            $this->Zona = $Zona;
        }

        public function setPreu($Preu) {
            $this->Preu = $Preu;
        }


}
