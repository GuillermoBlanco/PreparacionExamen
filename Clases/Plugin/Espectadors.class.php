<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Espectadors extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Espectadors';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='espectadors';
	const SQL_INSERT='INSERT INTO espectadors (DNI,Nom,Cognoms,Adreça,Telefon,Ciutat,Compte_Corrent,Num_Targeta) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO espectadors (DNI,Nom,Cognoms,Adreça,Telefon,Ciutat,Compte_Corrent,Num_Targeta) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE espectadors SET DNI=?,Nom=?,Cognoms=?,Adreça=?,Telefon=?,Ciutat=?,Compte_Corrent=?,Num_Targeta=? WHERE DNI=?';
	const SQL_SELECT_PK='SELECT * FROM espectadors WHERE DNI=?';
	const SQL_DELETE_PK='DELETE FROM espectadors WHERE DNI=?';
	const FIELD_DNI=217986858;
	const FIELD_NOM=217997527;
	const FIELD_COGNOMS=1822340013;
	const FIELD_ADREA=-8309115;
	const FIELD_TELEFON=-551917210;
	const FIELD_CIUTAT=53666445;
	const FIELD_COMPTE_CORRENT=1694237493;
	const FIELD_NUM_TARGETA=-1410842590;
	private static $PRIMARY_KEYS=array(self::FIELD_DNI);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_DNI=>'DNI',
		self::FIELD_NOM=>'Nom',
		self::FIELD_COGNOMS=>'Cognoms',
		self::FIELD_ADREA=>'Adreça',
		self::FIELD_TELEFON=>'Telefon',
		self::FIELD_CIUTAT=>'Ciutat',
		self::FIELD_COMPTE_CORRENT=>'Compte_Corrent',
		self::FIELD_NUM_TARGETA=>'Num_Targeta');
	private static $PROPERTY_NAMES=array(
		self::FIELD_DNI=>'dni',
		self::FIELD_NOM=>'Nom',
		self::FIELD_COGNOMS=>'Cognoms',
		self::FIELD_ADREA=>'adreA',
		self::FIELD_TELEFON=>'Telefon',
		self::FIELD_CIUTAT=>'Ciutat',
		self::FIELD_COMPTE_CORRENT=>'compteCorrent',
		self::FIELD_NUM_TARGETA=>'numTargeta');
	private static $PROPERTY_TYPES=array(
		self::FIELD_DNI=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COGNOMS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADREA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TELEFON=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CIUTAT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COMPTE_CORRENT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NUM_TARGETA=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_DNI=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_COGNOMS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_ADREA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_TELEFON=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CIUTAT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_COMPTE_CORRENT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_NUM_TARGETA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_DNI=>0,
		self::FIELD_NOM=>null,
		self::FIELD_COGNOMS=>null,
		self::FIELD_ADREA=>null,
		self::FIELD_TELEFON=>null,
		self::FIELD_CIUTAT=>null,
		self::FIELD_COMPTE_CORRENT=>null,
		self::FIELD_NUM_TARGETA=>null);
	private $dni;
	private $Nom;
	private $Cognoms;
	private $adreA;
	private $Telefon;
	private $Ciutat;
	private $compteCorrent;
	private $numTargeta;

	/**
	 * set value for DNI 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $dni
	 */
	public function setDni($dni) {
		$this->dni=$dni;
	}

	/**
	 * get value for DNI 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getDni() {
		return $this->dni;
	}

	/**
	 * set value for Nom 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $Nom
	 */
	public function setNom($Nom) {
		$this->Nom=$Nom;
	}

	/**
	 * get value for Nom 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNom() {
		return $this->Nom;
	}

	/**
	 * set value for Cognoms 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $Cognoms
	 */
	public function setCognoms($Cognoms) {
		$this->Cognoms=$Cognoms;
	}

	/**
	 * get value for Cognoms 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCognoms() {
		return $this->Cognoms;
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
	 * set value for Compte_Corrent 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $compteCorrent
	 */
	public function setCompteCorrent($compteCorrent) {
		$this->compteCorrent=$compteCorrent;
	}

	/**
	 * get value for Compte_Corrent 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCompteCorrent() {
		return $this->compteCorrent;
	}

	/**
	 * set value for Num_Targeta 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $numTargeta
	 */
	public function setNumTargeta($numTargeta) {
		$this->numTargeta=$numTargeta;
	}

	/**
	 * get value for Num_Targeta 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNumTargeta() {
		return $this->numTargeta;
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
			self::FIELD_DNI=>$this->getDni(),
			self::FIELD_NOM=>$this->getNom(),
			self::FIELD_COGNOMS=>$this->getCognoms(),
			self::FIELD_ADREA=>$this->getAdreA(),
			self::FIELD_TELEFON=>$this->getTelefon(),
			self::FIELD_CIUTAT=>$this->getCiutat(),
			self::FIELD_COMPTE_CORRENT=>$this->getCompteCorrent(),
			self::FIELD_NUM_TARGETA=>$this->getNumTargeta());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_DNI=>$this->getDni());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Espectadors');
	}

	/**
	 * get single Espectadors instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Espectadors
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Espectadors();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Espectadors from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Espectadors[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Espectadors') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>