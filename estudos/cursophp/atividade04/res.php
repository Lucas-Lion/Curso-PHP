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
        <h1>Gerador de Números</h1>
    </header>
    <section>
        <h2>Gerando um número aleatório entre 1 a 100...</h2>
        <form action="res.php" method="get">

        <?php 

        $num = mt_rand(1, 100);

        if ($num === 50) {
            echo "<p>Parabéns</p>";
        }

        echo "<p>O número gerado foi: <strong>$num</strong></p>";
        
        ?>

        <input type="submit" value="Gerar">
        </form>
    </section>
</body>
</html>