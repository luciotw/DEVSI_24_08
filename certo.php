<?php


    echo "<h3>Faça um array que gere 10 numeros aleatorios e verifique quantos são pares, quantos são impares, quantos são negativo e quantos são positivos   </h3>";

    $numeros = array();
    $cont_pares = 0;
    $cont_impares = 0;
    $cont_negativo = 0;
    $cont_positivo = 0;

    for ($i=0; $i <10 ; $i++) { 
        $numeros[$i] = rand(-10,10);

        if ($numeros[$i] % 2 == 0) {
            $cont_pares++;
        }else {
            $cont_impares++;
        }

        if ($numeros[$i < 0]) {
           $cont_negativo++;
        }else {
            $cont_positivo++;
        }
    }
    echo "Pares: ".$cont_pares." Impares ".$cont_impares."<br>";
    echo "Positivos: ".$cont_positivo." Negativos ".$cont_negativo."<br>";


    function imprimir_Array($array){
        echo "<p>";
        for ($i=0; $i < count($array) ; $i++) { 
            echo "Indice ".$i." valor ".$array[$i]."<br>";
        }
        echo "<p>";
    }

    imprimir_Array($numeros);


?>

<?php

    echo "<h3>utilizando o for imprima a tabuada do 8</h3>";

    for ($i=0; $i <=10 ; $i++) { 
        echo "<br>".$i."X 8 = ".($i*8);
    }


?>


<?php

    echo "<h3>Faça uma função que some todos os impares de 10 a 50 e exiba na tela </h3>";


    $soma = 0;
    function ImprimirImpares($inicial,$final){
        for ($i=$inicial; $i <=$final ; $i++) { 
            if ($i % 2 == 1) {
                $soma += $i;
            }
        }
        echo $soma."<br>";
    }
    ImprimirImpares(10,50);

?>

<?php

    echo"<h3>Faça um função que calcule a porcentagem de um numero </h3>";

    function porcentagem($numero,$porcentagem){
        echo $porcentagem."% de ".$numero." é ".(($numero/100)* $porcentagem);
    }
    porcentagem(10,10);


?>

<?php

    echo"<h3>Gere um array com numeros randomicos ( rand(-50,50)) e ordene em ordem </h3>";  
 
    function GerarArrayAleatorio($qtdIndice){
        $array = array();
        for ($i=0; $i <= $qtdIndice ; $i++) { 
            array_push($array, rand(-50,50));
        }
        return $array;
    }
    $novo_array = GerarArrayAleatorio(50);
    imprimir_Array($novo_array);
    function OrdenacaoCrescente($array){
        $tamanho = count($array)-1;
        $auxiliar = 0;
        for ($i=0; $i <$tamanho ; $i++) { 
            for ($j=0; $j <$tamanho-$i ; $j++) { 
                if ($array[$j] > $array[$i+1]) {
                    $auxiliar = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $auxiliar;
                }
            }
        }
    
        }



?>