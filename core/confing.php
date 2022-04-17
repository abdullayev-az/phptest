<?php

try{
    $db=new PDO("mysql:host=localhost;dbname=user","root","taleh82534");
    //  echo "ugurlu";
}catch(PDOexception $e){
    echo "XETA KODU: ".$e->getCode()."XETA HAQQINDA :".$e->getMessage();
}


?>