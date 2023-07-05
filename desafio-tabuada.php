<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $tab = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h1>Esta é a tabuada do $tab"."</br>";
        $c = 1;
        do {
            echo "$tab x $c = ".($tab*$c)."</br>";
            $c++;
        } while ($c <= 10);
    ?>
    <a href="desafio-tabuada.html">Voltar</a>
</body>
</html>