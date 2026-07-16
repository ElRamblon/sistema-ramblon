<?php 
include("conexion.php");


    
    try{
    $n = $_POST['nombre'];
    $a = $_POST['contrasena'];
    $z = $_POST['rol'];
    

    $stmt = $con->prepare("INSERT INTO crud(nombre,contrasena,rol) VALUES (?,?,?)");
    $stmt->execute([$n,$a,$z]);


    echo json_encode(["exito"=>true]);
}catch(PDOExeption $e){
    echo json_encode(["exito"=>false]);
}

?>
