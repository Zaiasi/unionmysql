<?php
const DBHOST ="localhost";
const DBUSER= "root";
const PASSWORD= "";
const DBNAME ="twitter";
function connect (){
    $conexion = mysqli_connect (DBHOST,DBUSER, PASSWORD, DBNAME);
    return $conexion;
}
var_dump(connect ());

?>