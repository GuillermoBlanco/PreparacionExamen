<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Foro extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Foro';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='foro';
	const SQL_INSERT='INSERT INTO foro (id,slug,nombre,autonomia) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO foro (slug,nombre,autonomia) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE foro SET id=?,slug=?,nombre=?,autonomia=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM foro WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM foro WHERE id=?';
	const FIELD_ID=-677433533;
	const FIELD_SLUG=1821713107;
	const FIELD_NOMBRE=-1820975631;
	const FIELD_AUTONOMIA=-1367593619;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_NOMBRE=>'nombre',
		self::FIELD_AUTONOMIA=>'autonomia');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_NOMBRE=>'nombre',
		self::FIELD_AUTONOMIA=>'autonomia');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SLUG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMBRE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AUTONOMIA=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SLUG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_NOMBRE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_AUTONOMIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_SLUG=>'',
		self::FIELD_NOMBRE=>'',
		self::FIELD_AUTONOMIA=>0);
	private $id;
	private $slug;
	private $nombre;
	private $autonomia;

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
	 * set value for nombre 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre=$nombre;
	}

	/**
	 * get value for nombre 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * set value for autonomia 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $autonomia
	 */
	public function setAutonomia($autonomia) {
		$this->autonomia=$autonomia;
	}

	/**
	 * get value for autonomia 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getAutonomia() {
		return $this->autonomia;
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
			self::FIELD_NOMBRE=>$this->getNombre(),
			self::FIELD_AUTONOMIA=>$this->getAutonomia());
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
		return self::hashToDomDocument($this->toHash(), 'Foro');
	}

	/**
	 * get single Foro instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Foro
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Foro();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Foro from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Foro[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Foro') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>