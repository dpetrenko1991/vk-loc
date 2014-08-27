<?php 
class Db 
{
	private static $_db = null;

	const DB_HOST = 'localhost';
	const DB_NAME = 'vk_loc';
	const DB_USER = 'root';
	const DB_PASS = '';

	public static function connect()
	{
		if (self::$_db === null) {
			self::$_db = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS);
		}
		return self::$_db;
	}

	public function query($sql, $params = array()) 
	{

	}
}