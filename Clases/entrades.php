<?php

/**
 * Description of entrades
 *
 * @author Melliw
 */
class entrades {
    	private $codiEspectacle;
	private $Data;
	private $Hora;
	private $codiRecinte;
	private $Zona;
	private $Fila;
	private $Numero;
	private $dniClient;
        
        public function getCodiEspectacle() {
            return $this->codiEspectacle;
        }

        public function getData() {
            return $this->Data;
        }

        public function getHora() {
            return $this->Hora;
        }

        public function getCodiRecinte() {
            return $this->codiRecinte;
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

        public function getDniClient() {
            return $this->dniClient;
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

        public function setCodiRecinte($codiRecinte) {
            $this->codiRecinte = $codiRecinte;
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

        public function setDniClient($dniClient) {
            $this->dniClient = $dniClient;
        }


}
