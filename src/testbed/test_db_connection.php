<?php

/* https://github.com/4weKromi */

require "../core/db_connect.php";

echo "Db connection :";
$db = new ConnectDb();
$db_res=$db->connect();
if($db_res){
    echo " Success";
}else{
    echo " Failed";
}

?>