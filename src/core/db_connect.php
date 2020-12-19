<?php

/* https://github.com/4weKromi */

require("config/db_config.php");

class ConnectDb extends ConfigDb{
	private $config;
	private $connection;
	private $err_db;
	public function __construct(){
		parent::__construct();
		$this->config=parent::get_db_config();
	}
	protected function connect():bool{
		try{
			$this->connection = new PDO("mysql:host=".$this->config['dbhost'].";dbname=".$this->config['dbname'],$this->config['dbuser'],$this->config['dbpass']);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return true;
		}catch(PDOException $e){
			$this->err_db=" DB error : Unable to connect !";
		}
		return false;
	}
	protected function getConnection(){
		return $this->connection;
	}
	protected function disconnect(){
        $this->connection->close();
        $this->connection=null;
	}
	protected function getErrMsg(){
		return $this->err_db;
	}
	public function __destruct(){
	}
}

?>
