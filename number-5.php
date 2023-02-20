<?php

// write a php function to find the second largest number in an array of numbers
$numbers=[
    2,44,66,77,44,5,90,60,400,777,444
];

function second_largest($numbers){
       sort($numbers);
       $sec_largest= array_splice($numbers,-2,1);
       return $sec_largest;
}

$value=second_largest($numbers);
print_r($value);
print_r($numbers);