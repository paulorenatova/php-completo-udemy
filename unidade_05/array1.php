<?php

    $salada = array("Maçã", "Abacate", "Laranja");
    $tipo_projeto = array("Residencial", "Comercial", "Institucional", "Industrial");
    $residencial = array("Unifalmiliar", "Multifamiliar");
    $comercial = array("Sala", "Loja");
    $institucional = array("Escola", "Hospital");
    $industrial = array("Fábrica");
    $tipo_arq = array("Interior", "Edificação")

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
<pre>
    <?php

    print_r($salada);
    echo "</br>";
    print_r($tipo_projeto);
    echo "</br>";
    print_r($residencial);
    echo "</br>";
    print_r($tipo_arq);
    echo "</br>";
    echo "___________________________</br>";
    echo count($salada)."</br>";
    echo count($tipo_projeto)."</br>";
    echo "___________________________</br>";
    $salada[] = "kiwi";
    print_r($salada);
    echo "</br>";

    ?>
</pre>
    </body>
</html>