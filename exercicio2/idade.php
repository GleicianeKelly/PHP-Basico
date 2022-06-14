<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div>
        <?php
    
        /*O isset permite fazer uma verificacao, ou seja,
        se o valor tiver recebido parametro a variavel recebe o valor
        senao recebe uma mensagem de erro ja padronizada.
        */ 
           $nome = isset ($_GET["nome"])?$_GET["nome"]:"nao informado";
           $ano = isset ($_GET["ano"])?$_GET["ano"]:0;
           $sexo = isset ($_GET["sexo"])?$_GET["sexo"]:"sem sexo";
           //Esse date pega o ano atual e o "Y" maiusculo e pra pegar o ano completo
           $idade = date("Y") - $ano;
           echo "$nome e $sexo e tem $idade anos";
        ?>
    </div>
</body>
</html>