<?php

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $nome = "Pedro";
        $idade = 23;
        $maioridade = ($idade > 18 && $idade < 65)? "maior de idade" : "menor de idade";
        $facultativo = ($idade >= 16 && $idade >= 65)? "facultativo" : "não vota";

        if ($maioridade == "maior de idade"){
            echo $nome . " já pode votar pois é " . $maioridade . " e tem menos de 65 anos </br>";
        } else if ($facultativo == "facultativo") {
            echo $nome . " pode votar pois é " . $facultativo . "</br>";
        } else {
            echo $nome . " não pode votar pois é " . $maioridade . "</br>";
        }


    ?>
    </body>
</html>