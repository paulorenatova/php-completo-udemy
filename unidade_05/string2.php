<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
            echo "Variável: ".$_nome."</br>";
            // strlen - Retorna primeira ocorrencia
            echo "O número de letras da variável é: " .strlen($_nome)."</br>";
            
            // stripos  - Retorna primeira ocorrência - posicao da letra no string
            echo "A primeira letra C aparece na posição: ".stripos($_nome, "c")."</br>";

            // strripos - Retorna última ocorrência
            echo "A última letra U aparece na posição: ".strripos($_nome, "u")."</br>";
            
            // strtolower - converte para letras min.
            echo "Nome escrito todo em minúsculo: ".strtolower($_nome)."</br>";

            // strtoupper - converte para letras mai.
            echo "Nome escrito todo em MAIÚSCULO: ".strtoupper($_nome)."</br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            echo "Quantas vezes a letra U aparece na variável: ".substr_count($_nome,"u")."</br>";

            // de um texto ou string


            // Faz diferença Maiusculas e minusculas
            
        ?>
        
        
    </body>
</html>