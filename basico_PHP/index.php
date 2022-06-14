<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        
        $nome = "gleice";
        $num = 32;
        echo "$nome tem $num anos  "; 

        $n1 = 3;
        $n2 = 2;
        $resultado1 = $n1 + $n2; 
        $resultado2 = $n1 - $n2;
        $resultado3 = $n1 * $n2;
        $resultado4 = $n1 / $n2;
        $resultado5 = $n1 % $n2;
        $media = ($n1+$n2)/2;
        echo "$resultado1 $resultado2 $resultado3 $resultado4 $resultado5";
        
        echo "A média é: $media";
        
        /*
            Se quiser pegar o número pela URL, deve-se colocar as 
            variáveis com o seguinte Get abaixo e passar o valor assim 
            pela URL: http://localhost/projetos/PHP/index.php?a=3&b=2

        */

        $number1 = $_GET["a"];
        $number2 = $_GET["b"];

        echo "<br>$number1 e $number2";

        /*
            Operadores aritméticos
        */

        echo "<br>O valor absoluto de $number1 é: ".abs($number1);
        echo "<br>O valor de $number1 <sup>$number2</sup> é: " .pow($number1, $number2);
        echo "<br>A raiz de $number1 é: " .sqrt($number1);
        echo "<br>O valor de $number1 arredondado é: " .round($number1);
        echo "<br>A parte inteira de $number1 é: " .intval($number1);
        echo "<br>O valor de $number1 em moeda é: " .number_format($number1, 2);


        /*Usamos o . como sinal de concatenação*/ 

        //Exercício incremento

        $ano = $_GET["anoCerto"];

        echo "O ano atual é $ano e o anterior é " . --$ano;
        
        //Variáveis referenciadas

        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável a vale : $a ";
        echo "<br> A variável b vale: $b ";
        //Resultado "a" vale 3 e "b" vale 8

        //Quando eu atribuo um & a variável A, tudo
        //que eu referenciar em b vai valer pra A

        $a = 3;
        $b = &$a;
        $b += 5;
        
        //Resultado "a" vale 8 e "b" também pois eu
        //atribui "a" a "b" e tudo que valer pra "b" vai pra "a"
         

        //Variáveis de variáveis

        $x = "abc";
        $$x = "def";

        echo "O conteúdo da variável X é $x";
        echo "<br> A variável criada recebeu o valor $abc";

        //O $x valeu ABC e ABC virou o nome de uma variável que recebeu 
        //def como valor;


        //Operadores relacionais

        $a > $b;
        $a < $b;
        $a >= $b;

        /**
         * a = 4
         * b = 3 
         * $variavel = (a > b) ? verdadeiro : falso
         * Isso é tipo if, se a condição dentro do parêntesis 
         * for satisfeita, o que estiver determinado em verdadeiro 
         * prevalecerá e o resultado será guardado numa variável e
         * vice-versa. 
         */
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores recebidos foram $n1 e $n2";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

        /**
         * Operadores Unários
         * o operador == testa o mesmo tipo, 
         * o operador === testa se é idêntico.
         * ex abaixo:
         */


        $n1 = 3;
        $n2 = "3";

        $result = ($n1 === $n2) ? "SIM" : "NÃO";

        echo "$result";

        //Média de notas

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        $result = ($media > 7) ? "Aprovado" : "Reprovado";
        echo "O aluno está $result";

        //ou: 

        echo "O aluno está: " . (($media > 7) ? "Aprovado" : "Reprovado");
        
        //Usando operadores relacionais

        $anoNasc = $_GET["ano"];
        $idade = 2022 - $anoNasc;

        $result = ($idade > 18 && $idade < 65) ? "Voto obrigatório" : "Voto não obrigatório";

        echo "Seu voto é: $result";

        ?>   
    </div>
    
</body>
</html>


