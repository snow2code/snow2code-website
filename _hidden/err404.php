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
        
        <meta name="description" content="Snowy's Website - Error 404">
        <meta name="author" content="Lyn Snow">

        <title>Error: 404</title>

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
        <!-- display($pageHeader) and spacer -->
        <?php display($pageHeaderNFooter) ?>
        <?php displaySpacer(50) ?>

        <!-- Put content here. -->
        <main>
            <!-- getContent("home") -->
            
            <h1>404</h1>
            <h2>Not Found</h2>
            <p>The page or resource you are looking for could not be found.</p>
        </main>

        <?php display($pageHeaderNFooter) ?>
    </body>
</html>