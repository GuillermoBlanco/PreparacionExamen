<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recintes
 *
 * @author Melliw
 */
class recintes {

    	private $Codi;
	private $Nom;
	private $Adreça;
	private $Ciutat;
	private $Telefon;
	private $Horari;
        
        public function getCodi() {
            return $this->Codi;
        }

        public function getNom() {
            return $this->Nom;
        }

        public function getAdreA() {
            return $this->Adreça;
        }

        public function getCiutat() {
            return $this->Ciutat;
        }

        public function getTelefon() {
            return $this->Telefon;
        }

        public function getHorari() {
            return $this->Horari;
        }

        public function setCodi($Codi) {
            $this->Codi = $Codi;
        }

        public function setNom($Nom) {
            $this->Nom = $Nom;
        }

        public function setAdreA($adreA) {
            $this->Adreça = $adreA;
        }

        public function setCiutat($Ciutat) {
            $this->Ciutat = $Ciutat;
        }

        public function setTelefon($Telefon) {
            $this->Telefon = $Telefon;
        }

        public function setHorari($Horari) {
            $this->Horari = $Horari;
        }


}
