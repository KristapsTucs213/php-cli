<?php

$string = readline("Ievadi kadu vardu");  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  

function func(){

}

function func2(){
    echo ("Job done");
}

function func3 ($string){
    echo ("Job done");
}

function func4 ($string1 = "lool", $string2 = "laaal", $string3 = "ldasd"){
    $m = $string1 . $string2 . $string3;
    echo $m;
}

function func5($sting){
    
}

