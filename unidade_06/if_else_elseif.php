<?php

    $a = -1;
    $b = 5;
    $c = $a + $b;


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php

        if ($a > $b){
            echo $a . " é maior que " . $b . "</br>";
        }elseif ($a == $b){
            echo $a . " é igual a " . $b . "</br>";
        }else {
            echo $a . " é menor que " .$b . "</br>";
        }

        if ($c >= 0){
            echo $c . " é maior do que zero!" . "</br>";
        }else {
            echo $c . " é menor que zero!" . "</br>";
        }


    ?>
    </body>
</html>