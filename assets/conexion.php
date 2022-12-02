<?php

function conexion(){
    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=dbformulario";
    $user = "user=postgres";
    $password = "password=MetaforA#2";


     $db = pg_connect("$host $port $dbname $user $password");

    return $db; 

}


?>