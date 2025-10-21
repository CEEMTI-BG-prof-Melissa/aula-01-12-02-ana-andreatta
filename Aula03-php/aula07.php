<html>
    <head>
        <title> Aula 7PHP </title>
        <h1> Maria Eduarda e Luisa </h2>
        <h2> 08/10/2025
        <h3> Operadores de Atribuição </h3>
    </head>
    <body>
        <hr>    
        <?php
            $a = 10; 
            echo "Valor inicial é igual a: $a";           
            $a = $a+5;
            echo "Após somar 5: $a";
            $a = $a-2;
            echo "Após subtrair 2: $a"
            echo "A é igual a $a e B é igual a: $b";
            echo "<br><br>";
            $a=$a+3;
            echo "Agora A é igual a: $a";
            echo "<br><br>";
            $b+=8;
            echo "Agora B é igual a: $b";
            echo "<br><br>";
            $b-=5;
            echo "Agora B é igual a: $b";
            echo "<br><br>";
            
            echo "<hr>";
            $b*=2;
            echo "Multiplicando o valor de B por 2 é igual a: $b";
            echo "<br><br>";
            $b/=10;
            echo "Dividindo o valor de B por 10 fica igual a: $b";
            echo "<br><br>";
            $b%=5;
            echo "O resto da divisão do valor de B dividido por 3 é igual a: $b";
            echo "<br><br>";
            $b.=5;
            echo "Concatenando o valor de B com o número 10 fica igual a: $b";
            echo "<br><br>";
        ?>
    </body>
</html>
