<?php

/**
 * Description of Post
 *
 * @author Melliw
 */
class Post {

    	private $id;
	private $slug;
	private $titulo;
	private $descripcion;
	private $parent;
	private $foro;
	private $autor;
	private $fecha;
        
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

        public function getParent() {
            return $this->parent;
        }

        public function getForo() {
            return $this->foro;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getFecha() {
            return $this->fecha;
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

        public function setParent($parent) {
            $this->parent = $parent;
        }

        public function setForo($foro) {
            $this->foro = $foro;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function setFecha($fecha) {
            $this->fecha = $fecha;
        }


}
