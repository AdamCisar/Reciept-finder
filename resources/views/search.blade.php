<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo asset('css/search.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/ingredients.css')?>">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <form action="">
        <div class="search-container">
                <input type="search" name="search" placeholder="Search..." class="search-input">
                <a href="" class="search-btn">
                        <i class="fas fa-search"></i>      
                </a>
        </div>
    </form>
<div class="ingredients">
    <?php foreach ($ingredients as $ingredient => $value) {
        echo $value['title'];
        ?> <input type="button"> <br> <?php

    }?>
</div>
    </body>
</html>

<head>

</head>

