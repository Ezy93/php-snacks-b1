<?php
    /* Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
    $randomIntArray = [];
    while(count($randomIntArray) < 15){
        $randomInt = rand(1,100); 
        if(!in_array($randomInt, $randomIntArray)){
            array_push($randomIntArray,$randomInt);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snack 4</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($randomIntArray); $i++) {?>
            <li>
                <?php echo $randomIntArray[$i] ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>