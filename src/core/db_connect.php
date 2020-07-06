<?php

/* https://github.com/4weKromi */

require("config/db_config.php");

class ConnectDb extends ConfigDb{
	private $config;
	public $connection;
	public function __construct(){
		parent::__construct();
		$this->config=parent::get_db_config();
	}
	public function connect(){
		try{
			$this->connection = new PDO("mysql:host=".$this->config['dbhost'].";dbname=".$this->config['dbname'],$this->config['dbuser'],$this->config['dbpass']);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
            return null;	
		}
		return $this->connection;
	}
	public function disconnect(){
		$this->connection->close();
	}
	function __destruct(){
	}
}

?>