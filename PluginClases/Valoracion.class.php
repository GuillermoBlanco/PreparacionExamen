<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Valoracion extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Valoracion';
	const SQL_IDENTIFIER_QUOTE='';
	const SQL_TABLE_NAME='valoracion';
	const SQL_INSERT='INSERT INTO valoracion (usuario,multimedia,valoracion) VALUES (?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO valoracion (usuario,multimedia,valoracion) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE valoracion SET usuario=?,multimedia=?,valoracion=? WHERE usuario=? AND multimedia=?';
	const SQL_SELECT_PK='SELECT * FROM valoracion WHERE usuario=? AND multimedia=?';
	const SQL_DELETE_PK='DELETE FROM valoracion WHERE usuario=? AND multimedia=?';
	const FIELD_USUARIO=-1896068190;
	const FIELD_MULTIMEDIA=522738007;
	const FIELD_VALORACION=647441774;
	private static $PRIMARY_KEYS=array(self::FIELD_USUARIO,self::FIELD_MULTIMEDIA);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_USUARIO=>'usuario',
		self::FIELD_MULTIMEDIA=>'multimedia',
		self::FIELD_VALORACION=>'valoracion');
	private static $PROPERTY_NAMES=array(
		self::FIELD_USUARIO=>'usuario',
		self::FIELD_MULTIMEDIA=>'multimedia',
		self::FIELD_VALORACION=>'valoracion');
	private static $PROPERTY_TYPES=array(
		self::FIELD_USUARIO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MULTIMEDIA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_VALORACION=>Db2PhpEntity::PHP_TYPE_BOOL);
	private static $FIELD_TYPES=array(
		self::FIELD_USUARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MULTIMEDIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_VALORACION=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_USUARIO=>0,
		self::FIELD_MULTIMEDIA=>0,
		self::FIELD_VALORACION=>'');
	private $usuario;
	private $multimedia;
	private $valoracion;

	/**
	 * set value for usuario 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $usuario
	 */
	public function setUsuario($usuario) {
		$this->usuario=$usuario;
	}

	/**
	 * get value for usuario 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getUsuario() {
		return $this->usuario;
	}

	/**
	 * set value for multimedia 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @param mixed $multimedia
	 */
	public function setMultimedia($multimedia) {
		$this->multimedia=$multimedia;
	}

	/**
	 * get value for multimedia 
	 *
	 * type:INT,size:10,default:null,primary,index
	 *
	 * @return mixed
	 */
	public function getMultimedia() {
		return $this->multimedia;
	}

	/**
	 * set value for valoracion 
	 *
	 * type:BIT,size:0,default:null
	 *
	 * @param mixed $valoracion
	 */
	public function setValoracion($valoracion) {
		$this->valoracion=$valoracion;
	}

	/**
	 * get value for valoracion 
	 *
	 * type:BIT,size:0,default:null
	 *
	 * @return mixed
	 */
	public function getValoracion() {
		return $this->valoracion;
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
			self::FIELD_USUARIO=>$this->getUsuario(),
			self::FIELD_MULTIMEDIA=>$this->getMultimedia(),
			self::FIELD_VALORACION=>$this->getValoracion());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_USUARIO=>$this->getUsuario(),
			self::FIELD_MULTIMEDIA=>$this->getMultimedia());
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Valoracion');
	}

	/**
	 * get single Valoracion instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Valoracion
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Valoracion();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Valoracion from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Valoracion[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Valoracion') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>