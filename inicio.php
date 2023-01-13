<?php 

echo "Olá!" . PHP_EOL;

$idade = 25;
$idademais10anos = $idade + 10;
$idademenos5 = $idade - 5;
$metadeidade = $idade / 2;
$dobroidade = $idade * 2;

$acompanhantes = 1;

// Other operators equal in C language

echo "Eu tenho ", $idade, " anos \n";

echo "A metade da minha idade é:", $metadeidade, "\n";

echo "Dobro da minha idade é: $dobroidade" . "\n";

echo "Em 10 anos terei: \t". $idademais10anos . "\n";

echo "Minha idade há 5 anos era de:" . $idademenos5 . "\n";

// if, for and while 

if ($idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar!";
} else {
   if($idade >= 16 && $acompanhantes > 1){
    echo "Pode entrar!";
   }else {
    echo "Você ainda não pode entrar!";
   } 
}


