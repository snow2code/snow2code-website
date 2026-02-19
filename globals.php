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

// We are only using you for mainetence page -w-
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function isMaintance() {
    $configUrl = "https://raw.githubusercontent.com/snow2code/snow2code-website/refs/heads/main/config.json";
    
    if ( !ini_get("allow_url_fopen")) {
        die("allow_url_fopen FFS SNWOY!");
    }

    try {
        $configData = @file_get_contents($configUrl);

        if ($configData === false) {
            throw new Exception("Unable to fetch remote config file ;w;");
        }

        $config = json_decode($configData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Invalid JSON data in config ;w;");
        }


        // finallyyy
        echo $config['test'];
    } catch (Exception $e) {
        echo "shit " . $e->getMessage();
    }
    
    // // Remote config file URL (must be HTTPS for security)
    // $configUrl = "https://example.com/config.json";

    // // Check if allow_url_fopen is enabled
    // if (!ini_get('allow_url_fopen')) {
    //     die("Error: allow_url_fopen is disabled in PHP settings.");
    // }

    // try {
    //     // Fetch the remote file
    //     $configData = @file_get_contents($configUrl);

    //     if ($configData === false) {
    //         throw new Exception("Unable to fetch remote config file.");
    //     }

    //     // Decode JSON config
    //     $config = json_decode($configData, true);

    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         throw new Exception("Invalid JSON format in config file.");
    //     }

    //     // Example usage
    //     echo "Database Host: " . htmlspecialchars($config['db_host']) . "<br>";
    //     echo "Database User: " . htmlspecialchars($config['db_user']) . "<br>";

    // } catch (Exception $e) {
    //     echo "Error: " . $e->getMessage();
    // }

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