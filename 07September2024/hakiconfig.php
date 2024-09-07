<?php 

define("host","localhost");
define("user","root");
define("pass","");
define("database","jquery");

$Haki = new mysqli();

@$Haki-> connect(host,user,pass);

@$Haki->select_db(database);

if($Haki->connect_errno){
    echo $Haki->connect_error;
    exit();
}

echo $Haki->error;

?>