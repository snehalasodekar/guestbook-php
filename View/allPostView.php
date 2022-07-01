<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A BlackJack Game as part of the BeCode course towards mastering Object Oriented Programming using PHP">
    <title>MVC EXample</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="playerAction text-center">
    <form method="post">
        <button type="submit" name="page" value="newpost" class="btn border-primary">New Post</button>

    </form>
</div>

<?php


foreach($decodedFileContent as $content){
    //print_r($content);
    echo "<p>". $content['firstName']." ". $content['surname']."</p>";
    echo "<p>". $content['date']."</p>";
    echo "<p>". $content['email']."</p>";
    echo "<p>". $content['message']."</p>";


    } ?>
<!--<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="./src/img/emoji.png" class="rounded mr-2" alt="...">
        <strong class="mr-auto"><?php /*echo $content['firstName']." ". $content['surname'] ; */?></strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true"><?php /*echo $content['date'];*/?></span>
        </button>
    </div>
    <div class="toast-body">
        <?php /*echo $content['message'];*/?>
    </div>
</div>-->

