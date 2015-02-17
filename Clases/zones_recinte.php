<?php
/**
 * Description of zones_recinte
 *
 * @author Melliw
 */
class zones_recinte {

    	private $Codi_Recinte;
	private $Zona;
	private $Capacitat;
        
        public function getCodiRecinte() {
            return $this->Codi_Recinte;
        }

        public function getZona() {
            return $this->Zona;
        }

        public function getCapacitat() {
            return $this->Capacitat;
        }

        public function setCodiRecinte($codiRecinte) {
            $this->Codi_Recinte = $codiRecinte;
        }

        public function setZona($Zona) {
            $this->Zona = $Zona;
        }

        public function setCapacitat($Capacitat) {
            $this->Capacitat = $Capacitat;
        }


}
