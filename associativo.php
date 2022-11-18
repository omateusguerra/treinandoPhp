<?php

//$lista_nomes = ["João", "Maria", "José", "Pedro", "Ana"];
//$lista_idades = [30, 35, 25, 20, 22,];

$lista = [
    "João" => 30,
    "Maria" => 35,
    "José" => 25,
    "Pedro" => 20,
    "Ana" => 22,
    "João" => 30
];

echo "<pre>";
print_r($lista);
echo "<pre>";
echo "<br>";

foreach ($lista as $nome => $idade) {
    echo "$nome tem $idade ano de idade. <br>";
}