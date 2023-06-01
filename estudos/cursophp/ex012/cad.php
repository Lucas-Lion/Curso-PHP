<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resutado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processo</h1>
    </header>
    <main>
        <?php 
        
        $nome = $_GET["nome"] ?? "Unknow";
        $sobrenome = $_GET["sobrenome"] ?? "Unknow";

        echo "<p>Você é $nome $sobrenome</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>