<?php
function conexion(){
    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=dbprueba";
    $user = "user=postgres";
    $password = "password=admin";
    
    
    $db = pg_connect ("$host $port $dbname $user $password");

   return $db;
}
?>