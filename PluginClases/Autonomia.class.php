<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Autonomia extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Autonomia';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='autonomia';
	const SQL_INSERT='INSERT INTO autonomia (id,slug,nombre) VALUES (?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO autonomia (slug,nombre) VALUES (?,?)';
	const SQL_UPDATE='UPDATE autonomia SET id=?,slug=?,nombre=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM autonomia WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM autonomia WHERE id=?';
	const FIELD_ID=1146251540;
	const FIELD_SLUG=2036411492;
	const FIELD_NOMBRE=-1654257854;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_NOMBRE=>'nombre');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SLUG=>'slug',
		self::FIELD_NOMBRE=>'nombre');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SLUG=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMBRE=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SLUG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_NOMBRE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_SLUG=>'',
		self::FIELD_NOMBRE=>'');
	private $id;
	private $slug;
	private $nombre;

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
			self::FIELD_NOMBRE=>$this->getNombre());
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
		return self::hashToDomDocument($this->toHash(), 'Autonomia');
	}

	/**
	 * get single Autonomia instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Autonomia
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Autonomia();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Autonomia from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Autonomia[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Autonomia') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>