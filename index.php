<?php

$a = 2; // variavel do tipo int
$b = 1.58; // variavel tipo float
$c = "1"; // variavel do tipo string

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
    
//estrutura de decisão



//echo ($a == 1)? "é igual a 1" : "não é igual a 1";

/*
$d = 10;

switch($d) {
    case '1':
        echo "encontrei o 1";
        break;
    
    case '2':
        echo "encontrei o 2";
        break;

    case '10':
        echo "encontrei o 10";
        break;

    default:
        echo "Não encontrei nada!";
        break;
            
}

*/

$cores = ["black","yellow","red","blue","green"];
$corRand = array_rand($cores); 


?>

<button style="background-color:<?=$cores[$corRand]?>">Botão</button>

