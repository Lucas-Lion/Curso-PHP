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
        <form action="res.php" method="get" name="numero">

        <?php 
        
        $valor = $_GET["numero"];

        $num = rand(1, 100);

        echo "<p>O número gerado foi: $num</p>";
        
        ?>
        </form>

    <p style="display:flex; justify-content: center;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </section>
</body>
</html>