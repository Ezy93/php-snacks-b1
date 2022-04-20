<?php 

    /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */

    $games = [
        [
            'host' => 'Olimbia Milano',
            'guest' => 'Cantù',
            'hostpoint' => 55,
            'guestpoint' => 60,
        ],
        [
            'host' => 'Toronto Raptors',
            'guest' => 'Laykers',
            'hostpoint' => 62,
            'guestpoint' => 50,
        ],
        [
            'host' => 'Chicago Bulls',
            'guest' => 'Mattinata',
            'hostpoint' => 55,
            'guestpoint' => 60,
        ]
    ]
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snacks b1</title>
</head>
<body>
    <h1>programmazione partite</h1>
    <ul>
        <?php 
        for($i = 0 ; $i < count($games); $i++ ){
            echo '<li>'.'<pre>'. $games[$i]['host'].' - '.$games[$i]['guest'].' | '.$games[$i]['hostpoint'].' - '.$games[$i]['guestpoint'].'</pre>'.'</li>';
        }
        ?>
    </ul>
</body>
</html>