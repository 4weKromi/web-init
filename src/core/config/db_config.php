<?php

/* https://github.com/4weKromi */

class ConfigDb{
    private $db_config;
    function __construct(){
        $this->db_config = array(
            "dbhost"=>"localhost:3306",
            "dbname"=>"sampleDB",
            "dbuser"=>"root",
            "dbpass"=>""
        );
    }
    protected function get_db_config(){
        return $this->m_config;
    }
    public function __destruct(){
    }
}

?>
