<?php


$palabras = ["Alan","Casa","Juan","Boda","Sapo"];

print"Palabras sin ordenar\n";
print_r($palabras);



function MergeSort($palabras){
    if(count($palabras) <= 1){
        return $palabras;
    }else{

        $mid = floor(count($palabras)/2);

        $left = array_slice($palabras, 0, $mid);
        $right = array_slice($palabras,$mid);

        //aplicando recursividad;
        $left = MergeSort($left);
        $right = MergeSort($right);

       return merge($left,$right);
    }

}

function merge($left, $right){
    $result = [];


    while(count($left) > 0 && count($right) > 0){
        if($left[0] <= $right[0]){
            array_push($result,array_shift($left));

        }else{
            array_push($result,array_shift($right));
        }

    }

    while(count($left) > 0){
        array_push($result,array_shift($left));
    }

    
    while(count($right) > 0){
        array_push($result,array_shift($right));
    }

    return $result;

}
print"Palabras ordenadas\n";
print_r(MergeSort($palabras));






?>