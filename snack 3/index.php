<?php 
    /* Creare un array di array. 
    Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post. */
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <ul>
        <?php 
            $postsValue = array_values($posts);
            $postsKey = array_keys($posts);
            for($i = 0; $i < count($postsKey); $i++){?>
                <h4> Post in data: <?php echo $postsKey[$i] ?></h4>
                <?php for($postIndex = 0; $postIndex < count($postsValue[$i]); $postIndex++){ ?>
                    <h5>
                        <?php echo $postsValue[$i][$postIndex]['title'] ?>
                    </h5>
                    <p>
                        <em>
                            <?php echo $postsValue[$i][$postIndex]['author'] ?>  
                        </em>
                    </p>
                    <p>
                        <?php echo $postsValue[$i][$postIndex]['text'] ?>
                    </p>
                <?php } ?>
            <?php } ?>
            
    </ul>
</body>
</html>