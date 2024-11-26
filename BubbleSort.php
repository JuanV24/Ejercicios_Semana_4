<?php

$array = [1,2,2,-5,4];

function BubbleSort($arr){
    
    if(count($arr) <= 1){
        return "Necesita al menos dos datos";
    } else{
        
        for($i=0; $i < count($arr) ;  $i++){
            //print("ESTE ES EL BUCLE CON I \n");
            
            for($j=0; $j < count($arr) -1 ; $j++){
                // print("este es el bucle con J: {$arr[$j]} \n");
                // print("su siguiente es:{$arr[$j+1]} \n");
                if($arr[$j] > $arr[$j+1]){
                    $aux = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $aux;
                }
            }
        }
        
        return $arr;
    }
    
    
}

print_r(BubbleSort($array));




?>