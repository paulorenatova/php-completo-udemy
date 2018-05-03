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

       $agenda = array(
                "nome" => "Paulo",
                "tel" => "123451234"
                );
       foreach ($agenda as $atributo => $valor) {
           echo $atributo . ": " . $valor . "</br> ";
       }


    ?>
    </body>
</html>