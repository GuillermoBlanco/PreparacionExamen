<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Receta extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Receta';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='receta';
	const SQL_INSERT='INSERT INTO receta (id,imagen,ingredientes) VALUES (?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO receta (id,imagen,ingredientes) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE receta SET id=?,imagen=?,ingredientes=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM receta WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM receta WHERE id=?';
	const FIELD_ID=708967303;
	const FIELD_IMAGEN=-85501217;
	const FIELD_INGREDIENTES=1284056491;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_IMAGEN=>'imagen',
		self::FIELD_INGREDIENTES=>'ingredientes');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_IMAGEN=>'imagen',
		self::FIELD_INGREDIENTES=>'ingredientes');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IMAGEN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INGREDIENTES=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_IMAGEN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_INGREDIENTES=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>0,
		self::FIELD_IMAGEN=>'',
		self::FIELD_INGREDIENTES=>'');
	private $id;
	private $imagen;
	private $ingredientes;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id=$id;
	}

	/**
	 * get value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for imagen 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $imagen
	 */
	public function setImagen($imagen) {
		$this->imagen=$imagen;
	}

	/**
	 * get value for imagen 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getImagen() {
		return $this->imagen;
	}

	/**
	 * set value for ingredientes 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @param mixed $ingredientes
	 */
	public function setIngredientes($ingredientes) {
		$this->ingredientes=$ingredientes;
	}

	/**
	 * get value for ingredientes 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @return mixed
	 */
	public function getIngredientes() {
		return $this->ingredientes;
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
			self::FIELD_IMAGEN=>$this->getImagen(),
			self::FIELD_INGREDIENTES=>$this->getIngredientes());
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
		return self::hashToDomDocument($this->toHash(), 'Receta');
	}

	/**
	 * get single Receta instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Receta
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Receta();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Receta from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Receta[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Receta') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>