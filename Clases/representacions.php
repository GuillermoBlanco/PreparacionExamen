<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of representacions
 *
 * @author Melliw
 */
class representacions {

    	private $codiEspectacle;
	private $Data;
	private $Hora;
        
        public function getCodiEspectacle() {
            return $this->codiEspectacle;
        }

        public function getData() {
            return $this->Data;
        }

        public function getHora() {
            return $this->Hora;
        }

        public function setCodiEspectacle($codiEspectacle) {
            $this->codiEspectacle = $codiEspectacle;
        }

        public function setData($Data) {
            $this->Data = $Data;
        }

        public function setHora($Hora) {
            $this->Hora = $Hora;
        }


}
