<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Usuario extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Usuario';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='usuario';
	const SQL_INSERT='INSERT INTO usuario (id,login,nombre,apellidos,email,rol,autonomia,pass) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO usuario (login,nombre,apellidos,email,rol,autonomia,pass) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE usuario SET id=?,login=?,nombre=?,apellidos=?,email=?,rol=?,autonomia=?,pass=? WHERE id=?';
	const SQL_SELECT_PK='SELECT * FROM usuario WHERE id=?';
	const SQL_DELETE_PK='DELETE FROM usuario WHERE id=?';
	const FIELD_ID=-1913139237;
	const FIELD_LOGIN=-111790935;
	const FIELD_NOMBRE=886878857;
	const FIELD_APELLIDOS=-389987179;
	const FIELD_EMAIL=-118320932;
	const FIELD_ROL=822234895;
	const FIELD_AUTONOMIA=249704917;
	const FIELD_PASS=-280594735;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGIN=>'login',
		self::FIELD_NOMBRE=>'nombre',
		self::FIELD_APELLIDOS=>'apellidos',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ROL=>'rol',
		self::FIELD_AUTONOMIA=>'autonomia',
		self::FIELD_PASS=>'pass');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGIN=>'login',
		self::FIELD_NOMBRE=>'nombre',
		self::FIELD_APELLIDOS=>'apellidos',
		self::FIELD_EMAIL=>'email',
		self::FIELD_ROL=>'rol',
		self::FIELD_AUTONOMIA=>'autonomia',
		self::FIELD_PASS=>'pass');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LOGIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMBRE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_APELLIDOS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ROL=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_AUTONOMIA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PASS=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LOGIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,false),
		self::FIELD_NOMBRE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_APELLIDOS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_ROL=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,false),
		self::FIELD_AUTONOMIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PASS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_LOGIN=>'',
		self::FIELD_NOMBRE=>'',
		self::FIELD_APELLIDOS=>'',
		self::FIELD_EMAIL=>'',
		self::FIELD_ROL=>'',
		self::FIELD_AUTONOMIA=>0,
		self::FIELD_PASS=>'');
	private $id;
	private $login;
	private $nombre;
	private $apellidos;
	private $email;
	private $rol;
	private $autonomia;
	private $pass;

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
	 * set value for login 
	 *
	 * type:VARCHAR,size:45,default:null
	 *
	 * @param mixed $login
	 */
	public function setLogin($login) {
		$this->login=$login;
	}

	/**
	 * get value for login 
	 *
	 * type:VARCHAR,size:45,default:null
	 *
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
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
	 * set value for apellidos 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $apellidos
	 */
	public function setApellidos($apellidos) {
		$this->apellidos=$apellidos;
	}

	/**
	 * get value for apellidos 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getApellidos() {
		return $this->apellidos;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null,unique
	 *
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email=$email;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:255,default:null,unique
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for rol 
	 *
	 * type:BIT,size:0,default:null
	 *
	 * @param mixed $rol
	 */
	public function setRol($rol) {
		$this->rol=$rol;
	}

	/**
	 * get value for rol 
	 *
	 * type:BIT,size:0,default:null
	 *
	 * @return mixed
	 */
	public function getRol() {
		return $this->rol;
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
	 * set value for pass 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @param mixed $pass
	 */
	public function setPass($pass) {
		$this->pass=$pass;
	}

	/**
	 * get value for pass 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @return mixed
	 */
	public function getPass() {
		return $this->pass;
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
			self::FIELD_LOGIN=>$this->getLogin(),
			self::FIELD_NOMBRE=>$this->getNombre(),
			self::FIELD_APELLIDOS=>$this->getApellidos(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_ROL=>$this->getRol(),
			self::FIELD_AUTONOMIA=>$this->getAutonomia(),
			self::FIELD_PASS=>$this->getPass());
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
		return self::hashToDomDocument($this->toHash(), 'Usuario');
	}

	/**
	 * get single Usuario instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Usuario
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Usuario();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Usuario from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Usuario[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Usuario') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>