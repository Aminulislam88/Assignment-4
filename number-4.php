<?php
//write a php function to check if a string contains only letters and whitespace
 $string= "hellopeople";
 $string2="hello people 23";

 function check($string)
 {
     if (ctype_alpha($string) && ctype_space($string)!=1) {
         return true;
     }
     return false;
 }

 $value= check($string);
 $value1=check($string2);
 var_dump($value);
 var_dump($value1);
 printf("the value is %d \n" ,$value);
 printf("the value is %d",$value1);