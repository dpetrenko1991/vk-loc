<?php 
class Db 
{

	const DB_HOST = 'localhost';
	const DB_NAME = 'vk_loc';
	const DB_USER = 'root';
	const DB_PASS = '';

	protected $_db = null;

	public function __construct() 
	{
		$this->_db = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS);
	}

	public function query($sql, $params = array()) 
	{
		$stmt = $this->_db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $value) {
				if (is_int($value)) {
					$stmt->bindValue($key, $value, PDO::PARAM_INT);
				} else {
					$stmt->bindValue($key, $value);
				}
			}
		}
		try {
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			return null;
		}
	}

	public function fetch($stmt, $mode = PDO::FETCH_OBJ)
	{
		if ($stmt !== null) {
			return $stmt->fetchAll($mode);
		}	
		return array();
	}
}