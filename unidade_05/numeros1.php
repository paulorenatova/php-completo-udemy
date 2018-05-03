<?php 
    $salario = 800;
    $meses   = 3;
    $r_quadrada = 36;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Quanto ganha no trimestre: " . $salario*$meses."</br>";
            echo "Quanto ganha na quinzena: " . $salario/2 . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(8,2) . "</br>";
            echo "Exponencial: " . pow(10,1) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada de " . $r_quadrada . " é " . sqrt($r_quadrada) . "!</br>";

            // Randômico Generica
            echo rand() . "</br>";

            // Randômico entre um intervalo
            echo rand(1,100) . "</br>";

            // Valor absoluto
            echo "Absoluto: " . abs(210) . "</br>";

        ?>
    </body>
</html>