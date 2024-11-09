<?php

require __DIR__ . "\..\..\Config\Database.php";
require __DIR__ . "\..\..\Model\Usuario.php";

$usuarioModel = new Usuario($conn);
$usuario = $usuarioModel->findAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>

    <style>
        .table {
            tr, td, th {
                border: 1px solid;
            }
        }
    </style>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                
            </tr>
        </thead>
        <tbody>
            <!-- percorre a lista de resultados -->
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <!-- escreve na tabela cada item retornado -->
                    <td><?php echo $usuario->id ?></td>
                    <td><?php echo $usuario->nome?></td>
                    <td><?php echo $usuario->nome?></td>
                    
                    <td>
                        <form action="VisualizarUsuario.php" method="GET">
                            <input 
                                type="hidden"
                                name="id" 
                                value="<?php echo $filme->id ?>"
                            >
                            <button>Detalhes</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>