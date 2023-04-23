<?php 

require_once __DIR__ . '/partials/functions.php';

if(isset($_GET['PasswordLength']) &&  $_GET['PasswordLength'] > 4){

   $ActualPassword = CreatePassword($_GET['PasswordLength']);
}
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Strong Password Generator</h1>


    <form action="index.php" method="GET">
        <div>
            <input name="PasswordLength" type="Number" min="4" step="1" placeholder="Lunghezza Password"> <br>
            <button type="submit">Create</button>
        </div>
    </form>

    <?php 
     if($ActualPassword != ""){

        ?>

        <h2>Password Created</h2>
        <h3><?= $_GET['PasswordLength'] ?> Characters </h3>

        <div><?= $ActualPassword ?></div>

        <?php

     }
    ?>

    </div>
</body>
</html>