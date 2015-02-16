<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Espectacles extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Espectacles';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='espectacles';
	const SQL_INSERT='INSERT INTO espectacles (Codi,Nom,Tipus,Data_Inicial,Data_Final,Interpret,Codi_Recinte) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO espectacles (Codi,Nom,Tipus,Data_Inicial,Data_Final,Interpret,Codi_Recinte) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE espectacles SET Codi=?,Nom=?,Tipus=?,Data_Inicial=?,Data_Final=?,Interpret=?,Codi_Recinte=? WHERE Codi=?';
	const SQL_SELECT_PK='SELECT * FROM espectacles WHERE Codi=?';
	const SQL_DELETE_PK='DELETE FROM espectacles WHERE Codi=?';
	const FIELD_CODI=389005659;
	const FIELD_NOM=-264535518;
	const FIELD_TIPUS=-810193329;
	const FIELD_DATA_INICIAL=-1380480342;
	const FIELD_DATA_FINAL=1845925995;
	const FIELD_INTERPRET=1619965923;
	const FIELD_CODI_RECINTE=-193016862;
	private static $PRIMARY_KEYS=array(self::FIELD_CODI);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_CODI=>'Codi',
		self::FIELD_NOM=>'Nom',
		self::FIELD_TIPUS=>'Tipus',
		self::FIELD_DATA_INICIAL=>'Data_Inicial',
		self::FIELD_DATA_FINAL=>'Data_Final',
		self::FIELD_INTERPRET=>'Interpret',
		self::FIELD_CODI_RECINTE=>'Codi_Recinte');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODI=>'Codi',
		self::FIELD_NOM=>'Nom',
		self::FIELD_TIPUS=>'Tipus',
		self::FIELD_DATA_INICIAL=>'dataInicial',
		self::FIELD_DATA_FINAL=>'dataFinal',
		self::FIELD_INTERPRET=>'Interpret',
		self::FIELD_CODI_RECINTE=>'codiRecinte');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODI=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TIPUS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATA_INICIAL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATA_FINAL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INTERPRET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CODI_RECINTE=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_CODI=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_TIPUS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_DATA_INICIAL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_DATA_FINAL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_INTERPRET=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_CODI_RECINTE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODI=>0,
		self::FIELD_NOM=>null,
		self::FIELD_TIPUS=>null,
		self::FIELD_DATA_INICIAL=>null,
		self::FIELD_DATA_FINAL=>null,
		self::FIELD_INTERPRET=>null,
		self::FIELD_CODI_RECINTE=>null);
	private $Codi;
	private $Nom;
	private $Tipus;
	private $dataInicial;
	private $dataFinal;
	private $Interpret;
	private $codiRecinte;

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
	 * set value for Tipus 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Tipus
	 */
	public function setTipus($Tipus) {
		$this->Tipus=$Tipus;
	}

	/**
	 * get value for Tipus 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTipus() {
		return $this->Tipus;
	}

	/**
	 * set value for Data_Inicial 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $dataInicial
	 */
	public function setDataInicial($dataInicial) {
		$this->dataInicial=$dataInicial;
	}

	/**
	 * get value for Data_Inicial 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDataInicial() {
		return $this->dataInicial;
	}

	/**
	 * set value for Data_Final 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $dataFinal
	 */
	public function setDataFinal($dataFinal) {
		$this->dataFinal=$dataFinal;
	}

	/**
	 * get value for Data_Final 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDataFinal() {
		return $this->dataFinal;
	}

	/**
	 * set value for Interpret 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Interpret
	 */
	public function setInterpret($Interpret) {
		$this->Interpret=$Interpret;
	}

	/**
	 * get value for Interpret 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getInterpret() {
		return $this->Interpret;
	}

	/**
	 * set value for Codi_Recinte 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $codiRecinte
	 */
	public function setCodiRecinte($codiRecinte) {
		$this->codiRecinte=$codiRecinte;
	}

	/**
	 * get value for Codi_Recinte 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCodiRecinte() {
		return $this->codiRecinte;
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
			self::FIELD_TIPUS=>$this->getTipus(),
			self::FIELD_DATA_INICIAL=>$this->getDataInicial(),
			self::FIELD_DATA_FINAL=>$this->getDataFinal(),
			self::FIELD_INTERPRET=>$this->getInterpret(),
			self::FIELD_CODI_RECINTE=>$this->getCodiRecinte());
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
		return self::hashToDomDocument($this->toHash(), 'Espectacles');
	}

	/**
	 * get single Espectacles instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Espectacles
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Espectacles();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Espectacles from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Espectacles[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Espectacles') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>