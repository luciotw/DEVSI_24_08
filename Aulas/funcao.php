<?php

function nomeFuncao(){
    if (true) {
        echo "funcionando a funcao";
    }
    else {
        echo "nunca vai cair aki";
    }
}
function Adicao($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}

function Subtracao($num1, $num2){
    $Menos = $num1 - $num2;
    return $Menos;
}

function Multiplicacao($num1, $num2){
    $Vezes = $num1 * $num2;
    return $Vezes;
}

function Divisao($num1, $num2){
    $Dividir = $num1 / $num2;
    return $Dividir;
}

function Media($num1, $num2){
    return ($num1 + $num2) / 2;
}

function LendCalc($num1, $num2, $operador){
    echo"<br>";
    if ($operador == "+") {
        echo Adicao($num1,$num2);
    }elseif ($operador == "-") {
        echo Subtracao($num1,$num2);
    }elseif ($operador == "*") {
        echo Multiplicacao($num1,$num2);
    }elseif ($operador == "/") {
        echo Divisao($num1,$num2);
    }elseif ($operador == "m") {
        echo Media($num1,$num2);
    }
    else {
        echo "Digite uma operação valída";
    }
}

function SomaArray($array){
    $retorno = 0;
    for ($i = 0; $i < count($array); $i++) { 
        $retorno += $array[$i];
    }
    return $retorno;
}

function MediaArray($array){
    $soma = SomaArray($array);
    return $soma/count($array);
}

/*
//nomeFuncao();
$resultado = Adicao(2,5);
echo "O resultado da soma é: ". $resultado;
*/

//$numeros = array(1,5,10,15,20,25);
//echo SomaArray($numeros);

echo LendCalc(8,5,"+");
echo LendCalc(8,5,"-");
echo LendCalc(8,5,"*");
echo LendCalc(8,5,"/");
echo LendCalc(8,5,"teste");
echo LendCalc(9.5,8.7,"m")


?>