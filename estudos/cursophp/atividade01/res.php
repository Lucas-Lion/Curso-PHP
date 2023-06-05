<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: white;
        }

        a {
            color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>O Resultado final é</h1>
    <?php 
    
    $valor = $_GET["valor"];

    echo "<p>O número escolhido foi <strong>$valor</strong></p>";
    echo "<p>O Antecessor do seu valor é</p>" . ($valor - 1);
    echo "<p>O Sucessor do seu valor é</p>" . ($valor + 1);
    
    ?>

    <p>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </p>
</body>
</html>