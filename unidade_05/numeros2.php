<?php
    $salario = 800;
    $gasolina = 2.79325;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo is_numeric($salario). "</br>";

            $type_salario = is_numeric($salario) . "</br>";
            If ($type_salario == 1){
                echo "O $salario é um número!" ."</br>";
            }else {
                echo "O $salario não é um número!" ."</br>";
            }"</br>";

            // testar se é inteiro
            $int_salario = is_int($salario);
            $int_gasolina = is_int($gasolina);

            if ($int_salario == 1){
                echo "$salario é um número inteiro" ."</br>";
            } else {
                echo "$salario não é um número inteiro." ."</br></br>";
            }

            if ($int_gasolina == 1){
                echo "$gasolina é um número inteiro" ."</br>";
            } else {
                echo "$gasolina não é um número inteiro." ."</br></br>";
            }

            // testar se é float
            $float_salario = is_float($salario);
            $float_gasolina = is_float($gasolina);

            if ($float_salario == 1){
                echo "$salario é um número flutuante! </br>";
            } else{
                echo "$salario não é um número flutuante! </br></br>";
            }
            if ($float_gasolina == 1){
                echo "$gasolina é um número flutuante! </br>";
            } else {
                echo "$gasolina não é um número flutuante! </br></br>";
            }

            // Arredondamento

            echo round($gasolina, 2)."</br>";
            echo floor($gasolina)."</br>";
            echo ceil($gasolina)."</br>";

        ?>
        
        
    </body>
</html>