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
        
        <meta name="description" content="Snowy's Website - Furry Wonderland">
        <meta name="author" content="Lyn Snow">

        <title>FW Fluffy List</title>

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
            <h1>Fluffy List</h1>
            
            <p>The offical fluffy list by Kapi</p>
            <br><br>

            <ol class="list-number list-spacer-very-small" style="margin-bottom: 10px;">
                <li> <p>Kapi</p> </li>
                <li> <p>Snowy</p> </li>
            
                <!-- <li> <p></p> </li> -->
            </ol>
        </main>

        <!-- <?php displaySpacer(750) ?> -->
        <?php display($pageHeaderNFooter) ?>


        <script src="/content/js/nav.js"></script>
    </body>
</html>