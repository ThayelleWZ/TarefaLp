
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplos PHP</title>
    <style>
        body {
            background-image: url('r.JPG');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            text-shadow: 2px 2px 5px black;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Exemplo de PHP com HTML</h1>

    <?php
        
        $primeiroNome1 = "Thayelle";
        $sobrenome1 = "Veronica";
        $idade1 = 16;
        $nomeCompleto1 = $primeiroNome1 . " " . $sobrenome1;

        /
        $primeiroNome2 = "Guilherme";
        $sobrenome2 = "Gabriel";
        $idade2 = 16;
        $nomeCompleto2 = $primeiroNome2 . " " . $sobrenome2;

        $a = 10;
        $b = 5;
        $soma = $a + $b;

        
        echo "<p><strong>Nome Completo 1:</strong> $nomeCompleto1</p>";
        if ($idade1 >= 18) {
            echo "<p>$nomeCompleto1 é maior de idade.</p>";
        } else {
            echo "<p>$nomeCompleto1 é menor de idade.</p>";
        }

     
        echo "<p><strong>Nome Completo 2:</strong> $nomeCompleto2</p>";
        if ($idade2 >= 18) {
            echo "<p>$nomeCompleto2 é maior de idade.</p>";
        } else {
            echo "<p>$nomeCompleto2 é menor de idade.</p>";
        }

        
        echo "<p>A soma de $a e $b é <strong>$soma</strong>.</p>";
    ?>
</body>
</html>