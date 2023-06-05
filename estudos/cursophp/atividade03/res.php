<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main> 
        <?php 
        
        $valor = $_GET["real"];

            $resultado = floor($valor);
            $fracionado =  $valor - $resultado;

        echo "Analisando o número <strong>$valor</strong> informado pelo usuário:";
        echo "<ul><li><p>A parte inteira do número é $inteiro</p></li></ul>";
        echo "<ul><li><p>A parte fracionária do número é $fracionado</p></li></ul>";
        ?>

        <p style="display:flex; justify-content: center;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>