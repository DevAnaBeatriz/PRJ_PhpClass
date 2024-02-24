<?php

$nome = "Ana Beatriz";
$lista = ['banana', 'uva', 'limão'];
$idade = '18';
$idade2 = 18;


echo $nome.'<br>';
echo $idade.'<br>';
//echo $lista;
echo '<br>';
var_dump($lista);
echo '<br>';
var_dump($nome);
echo '<br>';
var_dump($idade);
echo '<br>';

if($idade=== $idade2){
    echo '<br>';
    echo"Dentro do If";
    echo '<br>';
    echo"sim";
}else{
    echo '<br>';
    echo 'Dentro do Else';
    echo '<br>';
    var_dump($idade);
    echo '<br>';
    var_dump($idade2);

}