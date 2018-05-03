<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
<pre>
    <?php

    $salada = array("Maça", "Abacate", "Laranja");

    if(in_array("Pera", $salada)==1){
        echo "Existe o elemento Pera na salada!"."</br>";
    }else{
        echo "Não existe o elemento Pera na salada!"."</br>";
    }

    $salada[]= "Pera";
    if(in_array("Pera", $salada)==1){
        echo "Existe o elemento Pera na salada!"."</br>";
    }else {
        echo "Não existe o elemento Pera na salada!"."</br>";
    }

    echo array_search("Pera",$salada)."</br>";

    print_r($salada)

    ?>
</pre>
    </body>
</html>