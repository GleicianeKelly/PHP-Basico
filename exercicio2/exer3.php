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
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e tem $i anos";

            if($i >= 18){
                $v = "Ja pode votar";
                $d = "Ja pode dirigir";
            }

            else{
                $v = "Nao pode votar";
                $d = "Nao pode dirigir";
            }

            echo "Com essa idade voce pode $v e tambem $d";


            if($i < 16){
                $tipoVoto = "não vota";
            }
            elseif (($i >= 16 && $i<18 || $i > 65)){
                $tipoVoto = "voto opcional";
            }
            else{
                $tipoVoto = "voto obrigatório";
            }

            echo "Para essa idade o voto é $tipoVoto";

        ?>
    </div>
</body>
</html>