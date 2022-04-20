<?php 
    /* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. */

    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe vitae, quisquam natus aperiam quia est soluta quasi libero iste earum. Sapiente   eum provident ab eaque tempore nam facere quaerat tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit ';

    $paragraphArray = explode(".", $paragraph);
    var_dump($paragraphArray);
?>
