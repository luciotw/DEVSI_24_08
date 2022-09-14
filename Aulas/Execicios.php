<?php
//iniciando uma array na variavel
$lista = array();
//echo $lista;
//echo $lista[0] não funcinará
//Não existe dados no indice 0;
 

$nome =  array("Bruce", "Klark", "Diana", "Dick", "Barbara");

/*acessando manualmente
echo $nome[0]."<br>";
echo $nome[1]."<br>";
echo $nome[2]."<br>";
echo $nome[3]."<br>";
echo $nome[4]."<br>";
*/

for ($i = 0; $i < count($nome); $i++) 
{ 
    //echo $nome[$i]."<br>";
}

$dados = array();
$dados["Nome"] = array("Fer", "Maria", "Jão");
$dados["Idade"] = array("37", "41", "75");
$dados["Solteiro"] = array(true, false, false);

for ($i=0; $i <= 10 ; $i++) { 
    array_push($dados["Idade"],$i);
}

echo"<pre>";
var_dump($dados);
echo"</pre>";
$dados[1] = "Fernando esta no indice 1";
echo $dados[1];

echo"<pre>";
var_dump($dados);
echo"</pre>";
/*
$_POST[SENHA]
$_GET[ID]
$_COOKIE[CARRINHO]
$_SESSION
$_FILES
*/

$listaBanco = mysqli_query($conn, "nome, idade,");
$listaBanco["nome"];

?>