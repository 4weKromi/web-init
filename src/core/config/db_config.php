<?php

/* https://github.com/4weKromi */

class ConfigDb{
    private $db_config;
    function __construct(){
        $this->db_config = array(
            "dbhost"=>"localhost:3306",
            "dbname"=>"sampleDB",
            "dbuser"=>"root",
            "dbpass"=>"",
        );
    }
    function get_db_config(){
        return $this->db_config;
    }
}
?>