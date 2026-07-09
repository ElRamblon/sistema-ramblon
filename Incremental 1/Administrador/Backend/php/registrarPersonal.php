<?php 
include("conexion.php");


    
    try{
    $n = $_POST['nombre'];
    $a = $_POST['contrasena'];
    

    $stmt = $con->prepare("INSERT INTO crud(nombre,contrasena) VALUES (?,?)");
    $stmt->execute([$n,$a]);


    echo json_encode(["exito"=>true]);
}catch(PDOExeption $e){
    echo json_encode(["exito"=>false]);
}

?>