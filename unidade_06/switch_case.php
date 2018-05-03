<?php

    $projeto = "urbano";
    $tipo_proj = "interior";

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php

    switch ($projeto){
        case "residencial":
            echo "é um projeto residencial";
            break;
        case "comercial":
            echo "é um projeto comercial";
            break;
        case "industrial":
            echo "é um projeto industrial";
            break;
        case "institucional":
            echo "é um projeto institucional";
            break;
        case "urbano":
            echo "é um projeto urbano";
            break;
        default:
            echo "tem que definir o projeto pois essa opção não existe!";
    }

    ?>
    </body>
</html>