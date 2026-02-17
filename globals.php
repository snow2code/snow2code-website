<?php

$stylesheets = <<<EOD
<link rel="stylesheet" href="/content/css/footer.css">
<link rel="stylesheet" href="/content/css/list.css">
<link rel="stylesheet" href="/content/css/main.css">
<link rel="stylesheet" href="/content/css/nav.css">
EOD;

$nav = <<<EOD
<div class="navbar">
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-menu">
        <li>  <a href='/'>Home</a>  </li>
        <li>  <a href='/furree'>Furree</a>  </li>
        <li>  <a href='/furry-wonderland'>Furry Wonderland</a>  </li>
        <li>  <a href='/snowy'>Snowy</a>  </li>
    </ul>
</div>
EOD;

$pageHeaderNFooter = <<<EOD
<footer>
    <div class='head_foot-container'>
        <a href='/'>
            <span class='kitsune_text'>Kitsune</span>
            Hub
        </a>
        
        $nav
    </div>
</footer>
EOD;

function display($whatever)
{
    echo $whatever;
}

function displaySpacer($amount)
{
    echo "<div style='height: " . $amount . "px'></div>";
}

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

// function getFileContentsSafe($link)
// {
//     // $contents = file_get_contents($link);
//     if ( @file_get_contents($link) == FALSE )
//     {
//         return "Nothing.";
//     } else {
//         return file_get_contents($link);
//     }

//     echo $link;
// }

// function getContent($file)
// {
//     $link = "https://raw.githubusercontent.com/snow2code/Websites/refs/heads/main/snow2code/page-content/" . $file;

//     $b = getFileContentsSafe($link);
    
//     echo $b;
// }

?>