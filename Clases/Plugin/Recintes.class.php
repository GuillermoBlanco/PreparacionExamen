<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Recintes extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Recintes';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='recintes';
	const SQL_INSERT='INSERT INTO recintes (Codi,Nom,Adreça,Ciutat,Telefon,Horari) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO recintes (Codi,Nom,Adreça,Ciutat,Telefon,Horari) VALUES (?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE recintes SET Codi=?,Nom=?,Adreça=?,Ciutat=?,Telefon=?,Horari=? WHERE Codi=?';
	const SQL_SELECT_PK='SELECT * FROM recintes WHERE Codi=?';
	const SQL_DELETE_PK='DELETE FROM recintes WHERE Codi=?';
	const FIELD_CODI=1932180754;
	const FIELD_NOM=-1046039669;
	const FIELD_ADREA=1332836177;
	const FIELD_CIUTAT=1394811737;
	const FIELD_TELEFON=-1926086118;
	const FIELD_HORARI=1543391502;
	private static $PRIMARY_KEYS=array(self::FIELD_CODI);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_CODI=>'Codi',
		self::FIELD_NOM=>'Nom',
		self::FIELD_ADREA=>'Adreça',
		self::FIELD_CIUTAT=>'Ciutat',
		self::FIELD_TELEFON=>'Telefon',
		self::FIELD_HORARI=>'Horari');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODI=>'Codi',
		self::FIELD_NOM=>'Nom',
		self::FIELD_ADREA=>'adreA',
		self::FIELD_CIUTAT=>'Ciutat',
		self::FIELD_TELEFON=>'Telefon',
		self::FIELD_HORARI=>'Horari');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODI=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADREA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CIUTAT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TELEFON=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_HORARI=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_CODI=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_ADREA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_CIUTAT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_TELEFON=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_HORARI=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODI=>0,
		self::FIELD_NOM=>null,
		self::FIELD_ADREA=>null,
		self::FIELD_CIUTAT=>null,
		self::FIELD_TELEFON=>null,
		self::FIELD_HORARI=>null);
	private $Codi;
	private $Nom;
	private $adreA;
	private $Ciutat;
	private $Telefon;
	private $Horari;

	/**
	 * set value for Codi 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $Codi
	 */
	public function setCodi($Codi) {
		$this->Codi=$Codi;
	}

	/**
	 * get value for Codi 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getCodi() {
		return $this->Codi;
	}

	/**
	 * set value for Nom 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Nom
	 */
	public function setNom($Nom) {
		$this->Nom=$Nom;
	}

	/**
	 * get value for Nom 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNom() {
		return $this->Nom;
	}

	/**
	 * set value for Adreça 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $adreA
	 */
	public function setAdreA($adreA) {
		$this->adreA=$adreA;
	}

	/**
	 * get value for Adreça 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAdreA() {
		return $this->adreA;
	}

	/**
	 * set value for Ciutat 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Ciutat
	 */
	public function setCiutat($Ciutat) {
		$this->Ciutat=$Ciutat;
	}

	/**
	 * get value for Ciutat 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCiutat() {
		return $this->Ciutat;
	}

	/**
	 * set value for Telefon 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $Telefon
	 */
	public function setTelefon($Telefon) {
		$this->Telefon=$Telefon;
	}

	/**
	 * get value for Telefon 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTelefon() {
		return $this->Telefon;
	}

	/**
	 * set value for Horari 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Horari
	 */
	public function setHorari($Horari) {
		$this->Horari=$Horari;
	}

	/**
	 * get value for Horari 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHorari() {
		return $this->Horari;
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
			self::FIELD_CODI=>$this->getCodi(),
			self::FIELD_NOM=>$this->getNom(),
			self::FIELD_ADREA=>$this->getAdreA(),
			self::FIELD_CIUTAT=>$this->getCiutat(),
			self::FIELD_TELEFON=>$this->getTelefon(),
			self::FIELD_HORARI=>$this->getHorari());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_CODI=>$this->getCodi());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Recintes');
	}

	/**
	 * get single Recintes instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Recintes
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Recintes();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Recintes from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Recintes[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Recintes') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>