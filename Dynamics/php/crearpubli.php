<?php
$include = include("./config.php");
$con= connect();

if($con && $include){
    $ID_USUARIO = 2;
    $descripcion= "ola soy una descripcion";
    $fecha="01/06/2023";
    $hora= "10:00";
    $corazon= 200;
    $n_comentario= 30;
    $n_retuits= 10;

    // $peticion= "INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha','$hora', '$corazon', $n_comentario, $n_retuits )";
    // $query= mysqli_query($con, $peticion);
    // $sql="SELECT * FROM USUARIOS";
    $sql="SELECT * FROM publicacion WHERE ID_PUB> 0 && ID_PUB <5";
    $quey= mysqli_query($con, $sql);
    // $datos= mysqli_fetch_array($quey);
    // $datos= mysqli_fetch_assoc($quey);
    // var_dump($datos);
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // $datos= mysqli_fetch_assoc($quey);
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // var_dump($datos);

    while($row = mysqli_fetch_assoc($quey)){
        echo "<br>";
        
        
        echo "<br>";
        var_dump($row["n_comentarios"]);
        // var_dump($row);
 
}
}
?>