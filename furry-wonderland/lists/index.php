<?php

include_once '../../globals.php';

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

        <meta name="description" content="Snowy's Website - Furry Wonderland">
        <meta name="author" content="Lyn Snow">

        <title>Furry Wonderland Lists</title>

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
            <h1>Lists</h1>
            <p>The “official” lists for Furry Wonderland.</p>
            <p>Not BAD as it sounds. It’s just Not Cute List, Cute List and other upon request</p>

            <p>Important note, noone is added to the list UNLESS asked to be added, or requested to be added.</p>
            <br><br>
            <ul class="list-links">
                <li> <a href="not-cute">Not Cute List</a> </li>
                <li> <a href="cute">Cute List</a> </li>
                <li> <a href="smol">Smol List</a> </li>
                <li> <a href="fluffy">Fluffy List</a> </li>
                <li> <a href="clicker">Clicker Trained List</a> </li>
                <!-- <li> <a href=""></a> </li> -->
            <ul>
        </main>

        <!-- <?php displaySpacer(750) ?> -->
        <?php display($pageHeaderNFooter) ?>


        <script src="/content/js/nav.js"></script>
    </body>
</html>