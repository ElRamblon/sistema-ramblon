
<?php
include("conexion.php");
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'], $_POST['contrasena'])) {
    $n = trim($_POST['nombre']);
    $a = trim($_POST['contrasena']);

    $stmt = $con->prepare("SELECT * FROM crud WHERE nombre = ? AND contrasena = ?");
    $stmt->execute([$n, $a]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        session_start();
        $_SESSION['log'] = true;
        $_SESSION['rol'] = $usuario['rol'];
        $_SESSION['nombre'] = $usuario['nombre'];

        echo json_encode([
            'success' => true,
            'rol' => $usuario['rol'],
            'nombre' => $usuario['nombre']
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'msg' => 'Usuario no encontrado'
        ]);
    }
}
?>
