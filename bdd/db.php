<?php
class DB{

	public static $instance;

	public $bdd;

	private function __construct()
	{
		$this->bdd = new PDO('mysql:host=localhost;dbname=jdr','root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	}
	public static function getInstance()
	{
		if(empty(self::$instance)){
			self:: $instance = new DB();
		}
		return self::$instance;
	}
}