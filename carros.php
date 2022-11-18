<?php

$carros = [
    "LAS-1234" => [
        'Marca' => 'Fiat',
        'Modelo' => 'Uno'
    ],

    "MRC-4321" => [
        'Marca' => 'Ford',
        'Modelo' => 'Fiesta'
    ],

    "LUL-4133" => [
        'Marca' => 'Wolkswagen',
        'Modelo' => 'Gol'
    ]
];

//exibin'o $ca'ros:
echo "<pre>";
print_r($carros);
echo "<pre>";
echo "<br>";

//exibindo com foreach:
foreach ($carros as $placa => $carro) {
    echo "Placa: $placa <br>";
    echo "Marca: " . $carro['Marca'] . "<br>";
    echo "Modelo: " . $carro['Modelo'] . "<br>";
    echo "<br>";
}