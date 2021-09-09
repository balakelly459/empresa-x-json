<?php

require("./funcoes.php");
$empresax = lerArquivo("./empresax.json");

if(isset($_GET["buscarFuncionario"])){
    $empresax = buscarFuncionario($empresax, $_GET["buscarFuncionario"]);
 }

 $count = count($empresax);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa X</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <form action="">
        <input type="text" name="funcionario" placeholder="Buscar funcionario">
        <button>🔍</button>
    </form> -->
    <table border="1">
        <h1>Funcionários da Empresa X</h1>
        <h3>A empresa conta com <?= $count ?> funcionários</h3>
        <form action="">
            <h4>Pesquisar por nome</h4>
        <input type="text" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"]:""?>" 
        name="buscarFuncionario" placeholder="Buscar funcionário">
        <button>🔍</button>
    </form>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Sexo</th>
            <th>Endereço IP</th>
            <th>País</th>
            <th>Departamento</th>
        </tr>
        <?php
        foreach ($empresax as $funcionario):
            ?>
        <tr>
            <td><?= $funcionario->id?></td>
            <td><?= $funcionario->first_name?></td>
            <td><?= $funcionario->last_name?></td>
            <td><?= $funcionario->email?></td>
            <td><?= $funcionario->gender?></td>
            <td><?= $funcionario->ip_address?></td>
            <td><?= $funcionario->country?></td>
            <td><?= $funcionario->department?></td>
        </tr>
        <?php
            endforeach;
        ?>
        </table>
</body>
</html>