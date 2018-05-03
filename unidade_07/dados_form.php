<?php
    $nome = $_POST["tNome"];
    $senha = $_POST["tSenha"];
    $email = $_POST["tEmail"];
    $sexo = $_POST["tSexo"];
    $dataNasc = $_POST["tData"];
    $logradouro = $_POST["tLogradouro"];
    $numero = $_POST["tNum"];
    $estado = $_POST["tEstado"];
    $cidade = $_POST["tCidade"];
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        echo "Os dados são: </br>";
        echo "Nome: " . strtoupper($nome) . "</br>";
        echo "Senha: " . strtoupper($senha) . "</br>";
        echo "E-mail: " . strtoupper($email) . "</br>";
        echo "Sexo: " . strtoupper($sexo) . "</br>";
        echo "Data de nascimento: " . strtoupper($dataNasc) . "</br>";
        echo "Seu endereço é $logradouro, nº $numero - $cidade - $estado! </br>";
    ?>
    </body>
</html>