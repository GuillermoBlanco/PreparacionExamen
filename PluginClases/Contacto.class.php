<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Contacto extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Contacto';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='contacto';
	const SQL_INSERT='INSERT INTO contacto (id,email,asunto,texto) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO contacto (email,asunto,texto) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE contacto SET id=?,email=?,asunto=?,texto=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM contacto WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM contacto WHERE id=?';
	const FIELD_ID=41632538;
	const FIELD_EMAIL=-973938371;
	const FIELD_ASUNTO=-235692923;
	const FIELD_TEXTO=-960301437;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ASUNTO=>'asunto',
		self::FIELD_TEXTO=>'texto');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ASUNTO=>'asunto',
		self::FIELD_TEXTO=>'texto');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ASUNTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TEXTO=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_ASUNTO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_TEXTO=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_EMAIL=>'',
		self::FIELD_ASUNTO=>'',
		self::FIELD_TEXTO=>'');
	private $id;
	private $email;
	private $asunto;
	private $texto;

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
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email=$email;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for asunto 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $asunto
	 */
	public function setAsunto($asunto) {
		$this->asunto=$asunto;
	}

	/**
	 * get value for asunto 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getAsunto() {
		return $this->asunto;
	}

	/**
	 * set value for texto 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @param mixed $texto
	 */
	public function setTexto($texto) {
		$this->texto=$texto;
	}

	/**
	 * get value for texto 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @return mixed
	 */
	public function getTexto() {
		return $this->texto;
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
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_ASUNTO=>$this->getAsunto(),
			self::FIELD_TEXTO=>$this->getTexto());
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
		return self::hashToDomDocument($this->toHash(), 'Contacto');
	}

	/**
	 * get single Contacto instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Contacto
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Contacto();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Contacto from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Contacto[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Contacto') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>