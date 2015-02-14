<?php

/**
 * Description of Foro
 *
 * @author Melliw
 */
class Foro {

    	private $id;
	private $slug;
	private $nombre;
	private $autonomia;
        
        public function getId() {
            return $this->id;
        }

        public function getSlug() {
            return $this->slug;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getAutonomia() {
            return $this->autonomia;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setSlug($slug) {
            $this->slug = $slug;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setAutonomia($autonomia) {
            $this->autonomia = $autonomia;
        }


}
