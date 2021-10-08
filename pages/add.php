<?php

define('ROOT_DIR_HEAD', '../');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href=<?php echo ROOT_DIR_HEAD."src/css/styles.css";?>>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css">
    </head>
    <body>
        
        <div class="main-div">
            <h4>Main Page</h4>
        </div>
        <div class="floating-button">
            <a href="<?php echo ROOT_DIR_HEAD."index.php";?>">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" id="share-image-button">
                <i class="material-icons">add</i>
            </button>
            </a>
        </div>
    </body>
</html>