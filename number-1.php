<?php
//write a php function to sort an array of string by their length, in assending order
$fruits=[
    'apple',
    'banana',
    'orange',
    'mango',
    'grave',
    'date'
];

function sortBylength($fruits){
    usort($fruits, function ($a,$b){
        return strlen($a)-strlen($b);
    });
    return $fruits;
}

$sortArray=sortBylength($fruits);
print_r($sortArray);