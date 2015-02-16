<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of espectadors
 *
 * @author Melliw
 */
class espectadors {
    
    	private $dni;
	private $Nom;
	private $Cognoms;
	private $adreA;
	private $Telefon;
	private $Ciutat;
	private $compteCorrent;
	private $numTargeta;
        
        public function getDni() {
            return $this->dni;
        }

        public function getNom() {
            return $this->Nom;
        }

        public function getCognoms() {
            return $this->Cognoms;
        }

        public function getAdreA() {
            return $this->adreA;
        }

        public function getTelefon() {
            return $this->Telefon;
        }

        public function getCiutat() {
            return $this->Ciutat;
        }

        public function getCompteCorrent() {
            return $this->compteCorrent;
        }

        public function getNumTargeta() {
            return $this->numTargeta;
        }

        public function setDni($dni) {
            $this->dni = $dni;
        }

        public function setNom($Nom) {
            $this->Nom = $Nom;
        }

        public function setCognoms($Cognoms) {
            $this->Cognoms = $Cognoms;
        }

        public function setAdreA($adreA) {
            $this->adreA = $adreA;
        }

        public function setTelefon($Telefon) {
            $this->Telefon = $Telefon;
        }

        public function setCiutat($Ciutat) {
            $this->Ciutat = $Ciutat;
        }

        public function setCompteCorrent($compteCorrent) {
            $this->compteCorrent = $compteCorrent;
        }

        public function setNumTargeta($numTargeta) {
            $this->numTargeta = $numTargeta;
        }


}
