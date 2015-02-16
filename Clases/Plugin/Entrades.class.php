<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Entrades extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Entrades';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='entrades';
	const SQL_INSERT='INSERT INTO entrades (Codi_Espectacle,Data,Hora,Codi_Recinte,Zona,Fila,Numero,DNI_Client) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO entrades (Codi_Espectacle,Data,Hora,Codi_Recinte,Zona,Fila,Numero,DNI_Client) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE entrades SET Codi_Espectacle=?,Data=?,Hora=?,Codi_Recinte=?,Zona=?,Fila=?,Numero=?,DNI_Client=? WHERE Codi_Espectacle=? AND Data=? AND Hora=? AND Codi_Recinte=? AND Zona=? AND Fila=? AND Numero=?';
	const SQL_SELECT_PK='SELECT * FROM entrades WHERE Codi_Espectacle=? AND Data=? AND Hora=? AND Codi_Recinte=? AND Zona=? AND Fila=? AND Numero=?';
	const SQL_DELETE_PK='DELETE FROM entrades WHERE Codi_Espectacle=? AND Data=? AND Hora=? AND Codi_Recinte=? AND Zona=? AND Fila=? AND Numero=?';
	const FIELD_CODI_ESPECTACLE=-965106553;
	const FIELD_DATA=268100224;
	const FIELD_HORA=268232780;
	const FIELD_CODI_RECINTE=-1395032242;
	const FIELD_ZONA=268768894;
	const FIELD_FILA=268167246;
	const FIELD_NUMERO=250838386;
	const FIELD_DNI_CLIENT=-89414303;
	private static $PRIMARY_KEYS=array(self::FIELD_CODI_ESPECTACLE,self::FIELD_DATA,self::FIELD_HORA,self::FIELD_CODI_RECINTE,self::FIELD_ZONA,self::FIELD_FILA,self::FIELD_NUMERO);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'Codi_Espectacle',
		self::FIELD_DATA=>'Data',
		self::FIELD_HORA=>'Hora',
		self::FIELD_CODI_RECINTE=>'Codi_Recinte',
		self::FIELD_ZONA=>'Zona',
		self::FIELD_FILA=>'Fila',
		self::FIELD_NUMERO=>'Numero',
		self::FIELD_DNI_CLIENT=>'DNI_Client');
	private static $PROPERTY_NAMES=array(
		self::FIELD_CODI_ESPECTACLE=>'codiEspectacle',
		self::FIELD_DATA=>'Data',
		self::FIELD_HORA=>'Hora',
		self::FIELD_CODI_RECINTE=>'codiRecinte',
		self::FIELD_ZONA=>'Zona',
		self::FIELD_FILA=>'Fila',
		self::FIELD_NUMERO=>'Numero',
		self::FIELD_DNI_CLIENT=>'dniClient');
	private static $PROPERTY_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DATA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HORA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CODI_RECINTE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ZONA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FILA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NUMERO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DNI_CLIENT=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_CODI_ESPECTACLE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DATA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_HORA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_CODI_RECINTE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ZONA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,false),
		self::FIELD_FILA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NUMERO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DNI_CLIENT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_CODI_ESPECTACLE=>0,
		self::FIELD_DATA=>'',
		self::FIELD_HORA=>'',
		self::FIELD_CODI_RECINTE=>0,
		self::FIELD_ZONA=>'',
		self::FIELD_FILA=>0,
		self::FIELD_NUMERO=>0,
		self::FIELD_DNI_CLIENT=>null);
	private $codiEspectacle;
	private $Data;
	private $Hora;
	private $codiRecinte;
	private $Zona;
	private $Fila;
	private $Numero;
	private $dniClient;

	/**
	 * set value for Codi_Espectacle 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @param mixed $codiEspectacle
	 */
	public function setCodiEspectacle($codiEspectacle) {
		$this->codiEspectacle=$codiEspectacle;
	}

	/**
	 * get value for Codi_Espectacle 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getCodiEspectacle() {
		return $this->codiEspectacle;
	}

	/**
	 * set value for Data 
	 *
	 * type:VARCHAR,size:50,default:null,primary,index
	 *
	 * @param mixed $Data
	 */
	public function setData($Data) {
		$this->Data=$Data;
	}

	/**
	 * get value for Data 
	 *
	 * type:VARCHAR,size:50,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getData() {
		return $this->Data;
	}

	/**
	 * set value for Hora 
	 *
	 * type:VARCHAR,size:50,default:null,primary,index
	 *
	 * @param mixed $Hora
	 */
	public function setHora($Hora) {
		$this->Hora=$Hora;
	}

	/**
	 * get value for Hora 
	 *
	 * type:VARCHAR,size:50,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getHora() {
		return $this->Hora;
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
	 * set value for Fila 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @param mixed $Fila
	 */
	public function setFila($Fila) {
		$this->Fila=$Fila;
	}

	/**
	 * get value for Fila 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getFila() {
		return $this->Fila;
	}

	/**
	 * set value for Numero 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @param mixed $Numero
	 */
	public function setNumero($Numero) {
		$this->Numero=$Numero;
	}

	/**
	 * get value for Numero 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getNumero() {
		return $this->Numero;
	}

	/**
	 * set value for DNI_Client 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $dniClient
	 */
	public function setDniClient($dniClient) {
		$this->dniClient=$dniClient;
	}

	/**
	 * get value for DNI_Client 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getDniClient() {
		return $this->dniClient;
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
			self::FIELD_HORA=>$this->getHora(),
			self::FIELD_CODI_RECINTE=>$this->getCodiRecinte(),
			self::FIELD_ZONA=>$this->getZona(),
			self::FIELD_FILA=>$this->getFila(),
			self::FIELD_NUMERO=>$this->getNumero(),
			self::FIELD_DNI_CLIENT=>$this->getDniClient());
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
			self::FIELD_HORA=>$this->getHora(),
			self::FIELD_CODI_RECINTE=>$this->getCodiRecinte(),
			self::FIELD_ZONA=>$this->getZona(),
			self::FIELD_FILA=>$this->getFila(),
			self::FIELD_NUMERO=>$this->getNumero());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Entrades');
	}

	/**
	 * get single Entrades instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Entrades
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Entrades();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Entrades from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Entrades[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Entrades') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>