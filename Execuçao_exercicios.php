<?php
/*
    $lista = array();
    $lista = rand(-50,50);

    for ($i=0; $i <=10 ; $i++) { 
       array_push($lista,$i);
    }




    if ($lista % 2 == 0) {
        echo($lista." Número Par");
    }else {
        echo($lista." Número Ímpar");
    }
*/


//Faça uma função que some todos os impares de 10 a 50 e exiba na tela 

    function Soma_Impares(){
        $numeros = 0;

        for ($i=10; $i <=50 ; $i++) { 

            if ($i % 2 != 0) {
                $i + $i;
            }
        }
    }
    
    

?>
