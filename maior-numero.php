<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7 de PHP</title>

    <link rel="stylesheet" href="style7.css">

</head>
<body bgcolor="#DEB887">
    <div id="primeiro">
    <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
    <form action="" method="GET">
         <input type="number" placeholder="Digite o primeiro valor" name="valor1">
         <input type="number" placeholder="Digite o segundo valor " name="valor2">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_GET){
            $n1 = $_GET['valor1'];
            $n2 = $_GET['valor2'];
            if($n1 > $n2){
                echo("<p>{$n1} é maior que {$n2}</p>");
            }elseif($n2 > $n1){
                echo("<p>{$n2} é maior que {$n1}</p>");
            }else  {
                echo("<p>{$n1} e {$n2} são iguais</p>");
            }
        }        
    ?>
    </div>
</body>
</html>