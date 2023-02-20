<?php
//write a php function to concatenate two strings,but with the second string starting from the end of the first string
$string1= "My name is";
$string2 =" aminul islam";

function concatenate_string($string1,$string2){
    return $string1 . $string2;
}

$string = concatenate_string($string1,$string2);
echo $string;