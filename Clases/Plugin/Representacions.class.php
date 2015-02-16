<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Representacions extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Representacions';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='representacions';
	const SQL_INSERT='INSERT INTO representacions (Codi_Espectacle,Data,Hora) VALUES (?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO representacions (Codi_Espectacle,Data,Hora) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE representacions SET Codi_Espectacle=?,Data=?,Hora=? WHERE Codi_Espectacle=? AND Data=? AND Hora=?';
	const SQL_SELECT_PK='SELECT * FROM representacions WHERE Codi_Espectacle=? AND Data=? AND Hora=?';
	const SQL_DELETE_PK='DELETE FROM representacions WHERE Codi_Espectacle=? AND Data=? AND Hora=?';
	const FIELD_CODI_ESPECTACLE=533485252;
	const FIELD_DATA=-423545757;
	const FIELD_HORA=-423413201;
	private static $PRIMARY_KEYS=array(self::FIELD_CODI_ESPECTACLE,self::FIELD_DATA,self::FIELD_HORA);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'Codi_Espectacle',
		self::FIELD_DATA=>'Data',
		self::FIELD_HORA=>'Hora');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'codiEspectacle',
		self::FIELD_DATA=>'Data',
		self::FIELD_HORA=>'Hora');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DATA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HORA=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DATA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_HORA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODI_ESPECTACLE=>0,
		self::FIELD_DATA=>'',
		self::FIELD_HORA=>'');
	private $codiEspectacle;
	private $Data;
	private $Hora;

	/**
	 * set value for Codi_Espectacle 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $codiEspectacle
	 */
	public function setCodiEspectacle($codiEspectacle) {
		$this->codiEspectacle=$codiEspectacle;
	}

	/**
	 * get value for Codi_Espectacle 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getCodiEspectacle() {
		return $this->codiEspectacle;
	}

	/**
	 * set value for Data 
	 *
	 * type:VARCHAR,size:50,default:null,primary,unique
	 *
	 * @param mixed $Data
	 */
	public function setData($Data) {
		$this->Data=$Data;
	}

	/**
	 * get value for Data 
	 *
	 * type:VARCHAR,size:50,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getData() {
		return $this->Data;
	}

	/**
	 * set value for Hora 
	 *
	 * type:VARCHAR,size:50,default:null,primary,unique
	 *
	 * @param mixed $Hora
	 */
	public function setHora($Hora) {
		$this->Hora=$Hora;
	}

	/**
	 * get value for Hora 
	 *
	 * type:VARCHAR,size:50,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getHora() {
		return $this->Hora;
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
			self::FIELD_CODI_ESPECTACLE=>$this->getCodiEspectacle(),
			self::FIELD_DATA=>$this->getData(),
			self::FIELD_HORA=>$this->getHora());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODI_ESPECTACLE=>$this->getCodiEspectacle(),
			self::FIELD_DATA=>$this->getData(),
			self::FIELD_HORA=>$this->getHora());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Representacions');
	}

	/**
	 * get single Representacions instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Representacions
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Representacions();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Representacions from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Representacions[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Representacions') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>