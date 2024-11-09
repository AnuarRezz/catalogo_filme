<?php

require __DIR__ . "\..\..\Config\Database.php";
require __DIR__ . "\..\..\Model\Usuario.php";

$usuarioModel = new Usuario($conn);

$id = $_GET["id"];

$filme = $filmeModel->findById($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>

    <h3>Nome: <?php echo $usuario->nome ?></h3>
    <p>email: <?php echo $usuario->email ?></p>
</body>
</html>