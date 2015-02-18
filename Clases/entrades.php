<?php

/**
 * Description of entrades
 *
 * @author Melliw
 */
class entrades {
    	private $Codi_Espectacle;
	private $Data;
	private $Hora;
	private $Codi_Recinte;
	private $Zona;
	private $Fila;
	private $Numero;
	private $DNI_Client;
        
        public function getCodiEspectacle() {
            return $this->Codi_Espectacle;
        }

        public function getData() {
            return $this->Data;
        }

        public function getHora() {
            return $this->Hora;
        }

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

        public function getDniClient() {
            return $this->DNI_Client;
        }

        public function setCodiEspectacle($codiEspectacle) {
            $this->Codi_Espectacle= $codiEspectacle;
        }

        public function setData($Data) {
            $this->Data = $Data;
        }

        public function setHora($Hora) {
            $this->Hora = $Hora;
        }

        public function setCodiRecinte($codiRecinte) {
            $this->Codi_Recinte= $codiRecinte;
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
            $this->DNI_Client= $dniClient;
        }


}
