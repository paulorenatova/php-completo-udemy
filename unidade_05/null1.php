<?php

    $nome = null;

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php

    if (is_null($nome)){
        echo "A variável é nula!";
    }else {
        echo "A variável não é nula!";
    }

    ?>
    </body>
</html>