<?php

include_once '../globals.php';

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

        <title>Document</title>

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
            <h1>Furry Wonderland</h1>
            <br>
            <ul class="list-links">
                <li> <a href="/furry-wonderland/snow2code-info">Snowy's Info</a> </li>
                <li> <a href="/furry-wonderland/lists">Lists (NOT AS BAD AS IT SOUNDS!)</a> </li>
            <ul>
        </main>

        <!-- <?php displaySpacer(750) ?> -->
        <?php display($pageHeaderNFooter) ?>


        <script src="/content/js/nav.js"></script>
    </body>
</html>