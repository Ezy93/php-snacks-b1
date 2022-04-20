<?php 
    /* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>php snack 6</title>
</head>

<body>
    <div class="p-5">
        <h1 class="text-uppercase">teacher:</h1>
        <p>
            <?php for($i = 0; $i < count($db['teachers']); $i++){
                echo '<div class="bg-secondary p-2">'.$db['teachers'][$i]['name'].' '.$db['teachers'][$i]['lastname'].'</div>';
            } ?>
        </p>
        <h1 class="text-uppercase">pm:</h1>
        <p>
            <?php for($i = 0; $i < count($db['pm']); $i++){
                echo '<div class="bg-success p-2">'.$db['pm'][$i]['name'].' '.$db['pm'][$i]['lastname'].'</div>';
            } ?>
        </p>
    </div>
</body>
</html>