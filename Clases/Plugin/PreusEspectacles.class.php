<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class PreusEspectacles extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PreusEspectacles';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='preus_espectacles';
	const SQL_INSERT='INSERT INTO preus_espectacles (Codi_Espectacle,Codi_Recinte,Zona,Preu) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO preus_espectacles (Codi_Espectacle,Codi_Recinte,Zona,Preu) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE preus_espectacles SET Codi_Espectacle=?,Codi_Recinte=?,Zona=?,Preu=? WHERE Codi_Espectacle=? AND Codi_Recinte=? AND Zona=?';
	const SQL_SELECT_PK='SELECT * FROM preus_espectacles WHERE Codi_Espectacle=? AND Codi_Recinte=? AND Zona=?';
	const SQL_DELETE_PK='DELETE FROM preus_espectacles WHERE Codi_Espectacle=? AND Codi_Recinte=? AND Zona=?';
	const FIELD_CODI_ESPECTACLE=1922671797;
	const FIELD_CODI_RECINTE=-1129374240;
	const FIELD_ZONA=740517648;
	const FIELD_PREU=740222362;
	private static $PRIMARY_KEYS=array(self::FIELD_CODI_ESPECTACLE,self::FIELD_CODI_RECINTE,self::FIELD_ZONA);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'Codi_Espectacle',
		self::FIELD_CODI_RECINTE=>'Codi_Recinte',
		self::FIELD_ZONA=>'Zona',
		self::FIELD_PREU=>'Preu');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'codiEspectacle',
		self::FIELD_CODI_RECINTE=>'codiRecinte',
		self::FIELD_ZONA=>'Zona',
		self::FIELD_PREU=>'Preu');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CODI_RECINTE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ZONA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PREU=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_CODI_RECINTE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ZONA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,false),
		self::FIELD_PREU=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODI_ESPECTACLE=>0,
		self::FIELD_CODI_RECINTE=>0,
		self::FIELD_ZONA=>'',
		self::FIELD_PREU=>null);
	private $codiEspectacle;
	private $codiRecinte;
	private $Zona;
	private $Preu;

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
	 * set value for Codi_Recinte 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @param mixed $codiRecinte
	 */
	public function setCodiRecinte($codiRecinte) {
		$this->codiRecinte=$codiRecinte;
	}

	/**
	 * get value for Codi_Recinte 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getCodiRecinte() {
		return $this->codiRecinte;
	}

	/**
	 * set value for Zona 
	 *
	 * type:VARCHAR,size:20,default:null,primary,index
	 *
	 * @param mixed $Zona
	 */
	public function setZona($Zona) {
		$this->Zona=$Zona;
	}

	/**
	 * get value for Zona 
	 *
	 * type:VARCHAR,size:20,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getZona() {
		return $this->Zona;
	}

	/**
	 * set value for Preu 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $Preu
	 */
	public function setPreu($Preu) {
		$this->Preu=$Preu;
	}

	/**
	 * get value for Preu 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPreu() {
		return $this->Preu;
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
			self::FIELD_CODI_RECINTE=>$this->getCodiRecinte(),
			self::FIELD_ZONA=>$this->getZona(),
			self::FIELD_PREU=>$this->getPreu());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODI_ESPECTACLE=>$this->getCodiEspectacle(),
			self::FIELD_CODI_RECINTE=>$this->getCodiRecinte(),
			self::FIELD_ZONA=>$this->getZona());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PreusEspectacles');
	}

	/**
	 * get single PreusEspectacles instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PreusEspectacles
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PreusEspectacles();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of PreusEspectacles from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PreusEspectacles[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PreusEspectacles') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>