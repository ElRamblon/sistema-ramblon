<?php
include("conexion.php");

/* try{
    $n = $_POST['email'];
    $a = $_POST['contrasena'];
    

    $stmt = $con->prepare("SELECT * FROM clientes WHERE email=? and contrasena=?");
    $stmt->execute([$n,$a]);

    if(email==)
     echo json_encode(["exito"=>true]);
}catch(PDOExeption $e){
    echo json_encode(["exito"=>false]);
}
*/

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['contrasena'])) {
    $n = trim($_POST['email']);
    $a = trim($_POST['contrasena']);

    $stmt = $con->prepare("SELECT * FROM clientes WHERE email = ? AND contrasena = ?");
    $stmt->execute([$n, $a]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        session_start();
        $_SESSION['log'] = true;
       
        echo json_encode([
            'success' => true,
           
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'msg' => 'Usuario no encontrado'
        ]);
    }
}
?>

   