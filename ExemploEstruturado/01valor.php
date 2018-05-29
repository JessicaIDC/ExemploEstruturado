<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>exemplo</title>
    <style>
        body{
            background-image: url("fundo.jpg");
            text-align: center;
            font-size: 29px;
        }
        div{
            position: absolute;
            left: 30%;
            top: 50%;
        }
    </style>
</head>
<body background="fundo.jpg">
<div>
    <?php
        $Valor = $_GET["v"];
        $rq = sqrt($Valor);
        echo "O resultado da raiz quadrada de $Valor é ".number_format($rq,2);
    ?>

</div>

</body>
</html>