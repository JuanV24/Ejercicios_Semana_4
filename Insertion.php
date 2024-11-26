<?php

$Nombres= ["Juan","Emilio","Carlos","Alex"];

print"Lista sin ordenar\n";
print_r($Nombres);

function InsertionSort($arr){
    
    if(count($arr) <= 1 ){
        
        return "Se necesita más de dos datos";

    }else{
        
        for ($i=1; $i < count($arr); $i++) { 
            $key = $arr[$i];

            $j= $i - 1;
            while($j>= 0 && $arr[$j] > $key){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $key;
        }
        return $arr;
    }

}

print"Lista ordenada\n";
print_r(InsertionSort($Nombres));




?>