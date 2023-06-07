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
        <h1>Conversor de Moedas</h1>
    </header>
    <main> 
        <?php 
        // R$4,97 = $1,00
        
        $valor = $_GET["money"];

        $calculo = $valor / 4.97;    

        // echo ("O valor em doláres é US$");
        // echo number_format($calculo, 2, ',', '.');

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " Equivalem a " . numfmt_format_currency($padrao, $valor, "USD");

        ?>

        <p><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>