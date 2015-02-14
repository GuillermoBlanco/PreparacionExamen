<?php

/**
 * Description of Multimedia
 *
 * @author Melliw
 */
class Multimedia {

    	private $id;
	private $slug;
	private $titulo;
	private $descripcion;
	private $autonomia;
	private $multimedia;
	private $autor;
        
        public function getId() {
            return $this->id;
        }

        public function getSlug() {
            return $this->slug;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }

        public function getAutonomia() {
            return $this->autonomia;
        }

        public function getMultimedia() {
            return $this->multimedia;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setSlug($slug) {
            $this->slug = $slug;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        public function setAutonomia($autonomia) {
            $this->autonomia = $autonomia;
        }

        public function setMultimedia($multimedia) {
            $this->multimedia = $multimedia;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }


}
