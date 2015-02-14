<?php
/**
 * Description of Autonomia
 *
 * @author Melliw
 */
class Autonomia {
    	private $id;
	private $slug;
	private $nombre;
        
        public function getId() {
            return $this->id;
        }

        public function getSlug() {
            return $this->slug;
        }

        public function getNombre() {
            return $this->nombre;
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


}
