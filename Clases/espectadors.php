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
    
    	private $DNI;
	private $Nom;
	private $Cognoms;
	private $Adreça;
	private $Telefon;
	private $Ciutat;
	private $Compte_Corrent;
	private $Num_Targeta;
        
        public function getDni() {
            return $this->DNI;
        }

        public function getNom() {
            return $this->Nom;
        }

        public function getCognoms() {
            return $this->Cognoms;
        }

        public function getAdreA() {
            return $this->Adreça;
        }

        public function getTelefon() {
            return $this->Telefon;
        }

        public function getCiutat() {
            return $this->Ciutat;
        }

        public function getCompteCorrent() {
            return $this->Compte_Corrent;
        }

        public function getNumTargeta() {
            return $this->Num_Targeta;
        }

        public function setDni($dni) {
            $this->DNI = $dni;
        }

        public function setNom($Nom) {
            $this->Nom = $Nom;
        }

        public function setCognoms($Cognoms) {
            $this->Cognoms = $Cognoms;
        }

        public function setAdreA($adreA) {
            $this->Adreça = $adreA;
        }

        public function setTelefon($Telefon) {
            $this->Telefon = $Telefon;
        }

        public function setCiutat($Ciutat) {
            $this->Ciutat = $Ciutat;
        }

        public function setCompteCorrent($compteCorrent) {
            $this->Compte_Corrent= $compteCorrent;
        }

        public function setNumTargeta($numTargeta) {
            $this->Num_Targeta= $numTargeta;
        }


}
