<?php

    $nome = "";
    $endereco = "Rua A";
    $telefone = null;

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php

    if (empty($nome)){
        echo "A variável (nome) está vazia! </br>";
    }else {
        echo "A variável (nome)não está vazia! </br>";
    }
    if (empty($endereco)){
        echo "A variável (endereço) está vazia! </br>";
    }else {
        echo "A variável (endereço) não está vazia! </br>";
    }
    if (empty($telefone)){
        echo "A variável (telefone) está vazia! </br>";
    }else {
        echo "A variável (telefone) não está vazia! </br>";
    }
    ?>
    </body>
</html>