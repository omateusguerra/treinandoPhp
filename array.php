<?php
$lista_nomes = ["João", "Maria", "José", "Pedro", "Ana"];
$lista_idades = [30, 35, 25, 20, 22,];
//$lista = array("João", "Maria", "José", "Pedro", "Ana");

$lista_nomes[] = "Joana";
$lista_idades[] =  19;

echo "<h1>Arrays</h1><br>";
echo "Primeiro elemento: " . $lista_nomes[0] . "<br>";
for ($i = 0; $i < count($lista_nomes); $i++) {
    echo $lista_nomes[$i] . " tem " . $lista_idades[$i] . " anos de idade <br>";
}

echo "<br>";

foreach ($lista_nomes as $nome) {
    echo $nome . "<br>";
}

echo "<br>";

for ($i = 0; $i < count($lista_nomes); $i++){
    echo $lista_nomes[$i] . "<br>";
}

echo "<br>";

foreach($lista_nomes as $indice => $valor){
    echo "Indice: $indice" . " - Valor: $valor. <br>";
}