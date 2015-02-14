<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Post extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Post';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='post';
	const SQL_INSERT='INSERT INTO post (id,slug,titulo,descripcion,parent,foro,autor,fecha) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO post (slug,titulo,descripcion,parent,foro,autor,fecha) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE post SET id=?,slug=?,titulo=?,descripcion=?,parent=?,foro=?,autor=?,fecha=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM post WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM post WHERE id=?';
	const FIELD_ID=-391258839;
	const FIELD_SLUG=1957687097;
	const FIELD_TITULO=167470279;
	const FIELD_DESCRIPCION=722348383;
	const FIELD_PARENT=45490616;
	const FIELD_FORO=1957302612;
	const FIELD_AUTOR=542402005;
	const FIELD_FECHA=546526383;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_TITULO=>'titulo',
		self::FIELD_DESCRIPCION=>'descripcion',
		self::FIELD_PARENT=>'parent',
		self::FIELD_FORO=>'foro',
		self::FIELD_AUTOR=>'autor',
		self::FIELD_FECHA=>'fecha');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_TITULO=>'titulo',
		self::FIELD_DESCRIPCION=>'descripcion',
		self::FIELD_PARENT=>'parent',
		self::FIELD_FORO=>'foro',
		self::FIELD_AUTOR=>'autor',
		self::FIELD_FECHA=>'fecha');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SLUG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TITULO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPCION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARENT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FORO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_AUTOR=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FECHA=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SLUG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_TITULO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_DESCRIPCION=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,false),
		self::FIELD_PARENT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FORO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_AUTOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FECHA=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_SLUG=>'',
		self::FIELD_TITULO=>'',
		self::FIELD_DESCRIPCION=>'',
		self::FIELD_PARENT=>0,
		self::FIELD_FORO=>0,
		self::FIELD_AUTOR=>0,
		self::FIELD_FECHA=>'CURRENT_TIMESTAMP');
	private $id;
	private $slug;
	private $titulo;
	private $descripcion;
	private $parent;
	private $foro;
	private $autor;
	private $fecha;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id=$id;
	}

	/**
	 * get value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for slug 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $slug
	 */
	public function setSlug($slug) {
		$this->slug=$slug;
	}

	/**
	 * get value for slug 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * set value for titulo 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $titulo
	 */
	public function setTitulo($titulo) {
		$this->titulo=$titulo;
	}

	/**
	 * get value for titulo 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getTitulo() {
		return $this->titulo;
	}

	/**
	 * set value for descripcion 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @param mixed $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion=$descripcion;
	}

	/**
	 * get value for descripcion 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @return mixed
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * set value for parent 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $parent
	 */
	public function setParent($parent) {
		$this->parent=$parent;
	}

	/**
	 * get value for parent 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * set value for foro 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $foro
	 */
	public function setForo($foro) {
		$this->foro=$foro;
	}

	/**
	 * get value for foro 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getForo() {
		return $this->foro;
	}

	/**
	 * set value for autor 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $autor
	 */
	public function setAutor($autor) {
		$this->autor=$autor;
	}

	/**
	 * get value for autor 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getAutor() {
		return $this->autor;
	}

	/**
	 * set value for fecha 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP,index
	 *
	 * @param mixed $fecha
	 */
	public function setFecha($fecha) {
		$this->fecha=$fecha;
	}

	/**
	 * get value for fecha 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP,index
	 *
	 * @return mixed
	 */
	public function getFecha() {
		return $this->fecha;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_ID=>$this->getId(),
			self::FIELD_SLUG=>$this->getSlug(),
			self::FIELD_TITULO=>$this->getTitulo(),
			self::FIELD_DESCRIPCION=>$this->getDescripcion(),
			self::FIELD_PARENT=>$this->getParent(),
			self::FIELD_FORO=>$this->getForo(),
			self::FIELD_AUTOR=>$this->getAutor(),
			self::FIELD_FECHA=>$this->getFecha());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID=>$this->getId());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Post');
	}

	/**
	 * get single Post instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Post
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Post();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Post from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Post[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Post') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>