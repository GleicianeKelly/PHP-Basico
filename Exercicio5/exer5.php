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
        
        //Regressiva
            $c = 10;

            while($c >= 1){
                echo "$c";
                    $c--;
                $
            }
        
            //Exemplo para criar uma caixa de texto 5 vzs

            <form action="get" > 
            
            $cont = 1;

            while($cont <= 5){
                echo "Valor $cont: <input type = 'number' name = 'V$cont' 
                max ='100' min = '0' value = '0' /> <br/>";

            }

            <input type="submit" value = "Enviar" class = "botao">
            </form>


            //Outro exemplo de while

            $i = 1;

            while($i <= 5){
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
            }

            echo "$num1 $num2 $num3 $num4 $num5"

            //ou

            while($i <=5){
                $v = "num" . $i;
                echo "Valor $i : " . $$v . "<br/>";
                $i++;
            }


            $inicio = $_GET["in"];
            $final = $_GET["Fin"];
            $incremento = $_GET["Inc"];
            $c = 0;
		
            if($inicio < $final){
                while($inicio < $final){
                 $inicio += $incremento;
                    $c++;
                    echo "in";
                }
            
            }
            else{
                while($inicio > $final){
                    $inicio -= $incremento;
                    $c++;
                    echo "$in";
                }
            }
            
            
        ?>
    </div>
</body>
</html>