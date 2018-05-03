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

    if (isset($nome)){
        echo "A variável (nome) está configurada! </br>";
    }else {
        echo "A variável (nome)não está configurada! </br>";
    }
    if (isset($endereco)){
        echo "A variável (endereço) está configurada! </br>";
    }else {
        echo "A variável (endereço) não está configurada! </br>";
    }
    if (isset($telefone)){
        echo "A variável (telefone) está configurada! </br>";
    }else {
        echo "A variável (telefone) não está configurada! </br>";
    }
    ?>
    </body>
</html>