<?php

include_once 'globals.php';

?>

<!-- PAGE CODE -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="max-image-preview:large">
        <meta name="language" content="English">
        
        <meta name="description" content="Snowy's Website Home Page">
        <meta name="author" content="Lyn Snow">

        <title>Snowy Home Page</title>

        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="/content/css/footer.css">
        <link rel="stylesheet" href="/content/css/list.css">
        <link rel="stylesheet" href="/content/css/main.css">
        <link rel="stylesheet" href="/content/css/nav.css">

        <!-- Page Stylesheets -->
        <!-- <link rel="stylesheet" href="/content/css/nav.css"> -->
    </head>
    <body>
        <?php display($pageHeaderNFooter) ?>
        <?php displaySpacer(50) ?>

        <!-- Put content here. -->
        <main>
            <!-- getContent("home") -->
            
            <h1>Home</h1>
            <p>Home page -w-</p>
            <br>
            <p>If you wish to contact me:</p>
            <p>Email - snow2code@protonmail.com</p>
            <p>Discord - snow2code</p>

            <br><br><br>
            <p id="test">
                <?php
                    echo isMaintance();
                ?>
            </p>
        </main>

        <!-- <?php displaySpacer(750) ?> -->
        <?php display($pageHeaderNFooter) ?>


        <script src="/content/js/nav.js"></script>
    </body>
</html>