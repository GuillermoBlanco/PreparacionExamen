<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of espectacles
 *
 * @author Melliw
 */
class espectacles {
    
    	private $Codi;
	private $Nom;
	private $Tipus;
	private $dataInicial;
	private $dataFinal;
	private $Interpret;
	private $codiRecinte;
        
        public function getCodi() {
            return $this->Codi;
        }

        public function getNom() {
            return $this->Nom;
        }

        public function getTipus() {
            return $this->Tipus;
        }

        public function getDataInicial() {
            return $this->dataInicial;
        }

        public function getDataFinal() {
            return $this->dataFinal;
        }

        public function getInterpret() {
            return $this->Interpret;
        }

        public function getCodiRecinte() {
            return $this->codiRecinte;
        }

        public function setCodi($Codi) {
            $this->Codi = $Codi;
        }

        public function setNom($Nom) {
            $this->Nom = $Nom;
        }

        public function setTipus($Tipus) {
            $this->Tipus = $Tipus;
        }

        public function setDataInicial($dataInicial) {
            $this->dataInicial = $dataInicial;
        }

        public function setDataFinal($dataFinal) {
            $this->dataFinal = $dataFinal;
        }

        public function setInterpret($Interpret) {
            $this->Interpret = $Interpret;
        }

        public function setCodiRecinte($codiRecinte) {
            $this->codiRecinte = $codiRecinte;
        }


}
