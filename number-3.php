<?php
//write a php function to remove the first and last element from an array and return the remaining elements as a new array
$fruits=[
    'apple',
    'mango',
    'banana',
    'orange',
    'pinapple',
    'grave'

];
function newarray($fruit){
        $value=array_slice($fruit,1,4);
        return $value;


}
$update_value=newarray($fruits);
print_r($update_value);

