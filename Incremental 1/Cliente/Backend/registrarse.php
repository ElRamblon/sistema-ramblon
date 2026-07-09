<?php
include("conexion.php");

try{
    $n = $_POST['email'];
    $a = $_POST['contrasena'];
    

    $stmt = $con->prepare("INSERT INTO clientes(email,contrasena) VALUES (?,?)");
    $stmt->execute([$n,$a]);


    echo json_encode(["exito"=>true]);
}catch(PDOExeption $e){
    echo json_encode(["exito"=>false]);
}

?>