<?php
    /* Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
    $randomIntArray = [];
    for($i = 0; $i <= 15; $i++){
        $randomInt = rand(1,100); 
        if(!in_array($randomInt, $randomIntArray)){
            array_push($randomIntArray,$randomInt);
        }
    }
    var_dump($randomIntArray);
?>