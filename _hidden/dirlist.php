<?php
$base = realpath(__DIR__ . '/../');
$path = isset($_GET['path']) ? $_GET['path'] : '';

$dir = realpath($base . '/' . $path);
$files = null;

// Security check, quite important don't ya think?
if ( !$dir || strpos($dir, $base) !== 0 || !is_dir($dir) ) {
    // I didn't think you'd fail the security check!
    // From my testing, you can't fail this!!! WTF!
    require __DIR__ . '/err404.php';
    exit;
}

// Okay so we can get the directory files now
$files = scandir($dir);

$indexOfText = htmlspecialchars($path);;
//null;

// if ( str_contains($base, "snow2code-yip.page.gd") ) {
//     $indexOfText = htmlspecialchars($path);
// } elseif ( str_contains($base, "snow2code.page.gd") ) {
//     $indexOfText = htmlspecialchars($path);
// } elseif ( str_contains($base, "snow2code.infy.uk") ) {
//     $indexOfText = htmlspecialchars($path);
// } else {
    
// }
/**
 * Get the size of a file in bytes, KB, MB, etc.
 * Includes error handling for missing or unreadable files.
 */


function getFileSizeFormatted(string $filePath): string {
    // Check if file exists and is readable
    if (!file_exists($filePath)) {
        echo "<br>";
        echo $filePath;
        echo "<br>";
        return "Error: File does not exist.";
    }
    if (!is_readable($filePath)) {
        return "Error: File is not readable.";
    }

    // Try to get file size
    $size = @filesize($filePath);
    if ($size === false) {
        return "Error: Unable to determine file size.";
    }

    // Convert size to human-readable format
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $i = 0;
    while ($size >= 1024 && $i < count($units) - 1) {
        $size /= 1024;
        $i++;
    }

    return round($size, 2) . ' ' . $units[$i];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="color-scheme" content="light dark">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="max-image-preview:large">
        <meta name="language" content="English">
        
        <meta name="description" content="Snowy's Website - Directory Listing">
        <meta name="author" content="Lyn Snow">

        <title>Document</title>

        <style>
            h1 {
                border-bottom: 1px solid #c0c0c0;
                margin-bottom: 10px;
                padding-bottom: 10px;
                white-space: nowrap;
            }

            table {
                border-collapse: collapse;
            }

            th {
                cursor: pointer;
            }

            td.detailsColumn {
                padding-inline-start: 2em;
                text-align: end;
                white-space: nowrap;
            }

            a.icon {
                padding-inline-start: 1.5em;
                text-decoration: none;
                user-select: auto;
            }

            a.icon:hover {
                text-decoration: underline;
            }

            a.file {
                background : url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABnRSTlMAAAAAAABupgeRAAABEElEQVR42nRRx3HDMBC846AHZ7sP54BmWAyrsP588qnwlhqw/k4v5ZwWxM1hzmGRgV1cYqrRarXoH2w2m6qqiqKIR6cPtzc3xMSML2Te7XZZlnW7Pe/91/dX47WRBHuA9oyGmRknzGDjab1ePzw8bLfb6WRalmW4ip9FDVpYSWZgOp12Oh3nXJ7nxoJSGEciteP9y+fH52q1euv38WosqA6T2gGOT44vry7BEQtJkMAMMpa6JagAMcUfWYa4hkkzAc7fFlSjwqCoOUYAF5RjHZPVCFBOtSBGfgUDji3c3jpibeEMQhIMh8NwshqyRsBJgvF4jMs/YlVR5KhgNpuBLzk0OcUiR3CMhcPaOzsZiAAA/AjmaB3WZIkAAAAASUVORK5CYII=") left top no-repeat;
            }

            a.dir {
                background : url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABt0lEQVR42oxStZoWQRCs2cXdHTLcHZ6EjAwnQWIkJyQlRt4Cd3d3d1n5d7q7ju1zv/q+mh6taQsk8fn29kPDRo87SDMQcNAUJgIQkBjdAoRKdXjm2mOH0AqS+PlkP8sfp0h93iu/PDji9s2FzSSJVg5ykZqWgfGRr9rAAAQiDFoB1OfyESZEB7iAI0lHwLREQBcQQKqo8p+gNUCguwCNAAUQAcFOb0NNGjT+BbUC2YsHZpWLhC6/m0chqIoM1LKbQIIBwlTQE1xAo9QDGDPYf6rkTpPc92gCUYVJAZjhyZltJ95f3zuvLYRGWWCUNkDL2333McBh4kaLlxg+aTmyL7c2xTjkN4Bt7oE3DBP/3SRz65R/bkmBRPGzcRNHYuzMjaj+fdnaFoJUEdTSXfaHbe7XNnMPyqryPcmfY+zURaAB7SHk9cXSH4fQ5rojgCAVIuqCNWgRhLYLhJB4k3iZfIPtnQiCpjAzeBIRXMA6emAqoEbQSoDdGxFUrxS1AYcpaNbBgyQBGJEOnYOeENKR/iAd1npusI4C75/c3539+nbUjOgZV5CkAU27df40lH+agUdIuA/EAgDmZnwZlhDc0wAAAABJRU5ErkJggg==") left top no-repeat;
            }

            a.up {
                background : url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACM0lEQVR42myTA+w1RxRHz+zftmrbdlTbtq04qRGrCmvbDWp9tq3a7tPcub8mj9XZ3eHOGQdJAHw77/LbZuvnWy+c/CIAd+91CMf3bo+bgcBiBAGIZKXb19/zodsAkFT+3px+ssYfyHTQW5tr05dCOf3xN49KaVX9+2zy1dX4XMk+5JflN5MBPL30oVsvnvEyp+18Nt3ZAErQMSFOfelCFvw0HcUloDayljZkX+MmamTAMTe+d+ltZ+1wEaRAX/MAnkJdcujzZyErIiVSzCEvIiq4O83AG7LAkwsfIgAnbncag82jfPPdd9RQyhPkpNJvKJWQBKlYFmQA315n4YPNjwMAZYy0TgAweedLmLzTJSTLIxkWDaVCVfAbbiKjytgmm+EGpMBYW0WwwbZ7lL8anox/UxekaOW544HO0ANAshxuORT/RG5YSrjlwZ3lM955tlQqbtVMlWIhjwzkAVFB8Q9EAAA3AFJ+DR3DO/Pnd3NPi7H117rAzWjpEs8vfIqsGZpaweOfEAAFJKuM0v6kf2iC5pZ9+fmLSZfWBVaKfLLNOXj6lYY0V2lfyVCIsVzmcRV9Y0fx02eTaEwhl2PDrXcjFdYRAohQmS8QEFLCLKGYA0AeEakhCCFDXqxsE0AQACgAQp5w96o0lAXuNASeDKWIvADiHwigfBINpWKtAXJvCEKWgSJNbRvxf4SmrnKDpvZavePu1K/zu/due1X/6Nj90MBd/J2Cic7WjBp/jUdIuA8AUtd65M+PzXIAAAAASUVORK5CYII=") left top no-repeat;
            }

            html[dir=rtl] a {
                background-position-x: right;
            }

            #parentDirLinkBox {
                margin-bottom: 10px;
                padding-bottom: 10px;
            }
        </style>

        <script>
            function addRow(name, url, isdir, size, size_string, date_modified, date_modified_string) {
                if (name == "." || name == "..")
                    return;

                var root = document.location.pathname;
                if (root.substr(-1) !== "/")
                    root += "/";

                var tbody = document.getElementById("tbody");
                var row = document.createElement("tr");
                var file_cell = document.createElement("td");
                var link = document.createElement("a");

                link.className = isdir ? "icon dir" : "icon file";

                if (isdir) {
                    name = name + "/";
                    url = url + "/";
                    size = 0;
                    size_string = "";
                } else {
                    link.draggable = "true";
                    link.addEventListener("dragstart", onDragStart, false);
                }
                link.innerText = name;
                link.href = root + url;

                file_cell.dataset.value = name;
                file_cell.appendChild(link);

                row.appendChild(file_cell);
                row.appendChild(createCell(size, size_string));
                row.appendChild(createCell(date_modified, date_modified_string));

                tbody.appendChild(row);
            }

            function onDragStart(e) {
                var el = e.srcElement;
                var name = el.innerText.replace(":", "");
                var download_url_data = "application/octet-stream:" + name + ":" + el.href;
                e.dataTransfer.setData("DownloadURL", download_url_data);
                e.dataTransfer.effectAllowed = "copy";
            }

            function createCell(value, text) {
                var cell = document.createElement("td");
                cell.setAttribute("class", "detailsColumn");
                cell.dataset.value = value;
                cell.innerText = text;
                return cell;
            }

            function start(location) {
                var header = document.getElementById("header");
                header.innerText = header.innerText.replace("LOCATION", location);

                document.getElementById("title").innerText = header.innerText;
            }

            function onHasParentDirectory() {
                var box = document.getElementById("parentDirLinkBox");
                box.style.display = "block";

                var root = document.location.pathname;
                if (!root.endsWith("/"))
                    root += "/";

                var link = document.getElementById("parentDirLink");
                link.href = root + "..";
            }

            function sortTable(column) {
                var theader = document.getElementById("theader");
                var oldOrder = theader.cells[column].dataset.order || '1';
                oldOrder = parseInt(oldOrder, 10)
                var newOrder = 0 - oldOrder;
                theader.cells[column].dataset.order = newOrder;

                var tbody = document.getElementById("tbody");
                var rows = tbody.rows;
                var list = [], i;
                for (i = 0; i < rows.length; i++) {
                    list.push(rows[i]);
                }

                list.sort(function(row1, row2) {
                    var a = row1.cells[column].dataset.value;
                    var b = row2.cells[column].dataset.value;
                    if (column) {
                        a = parseInt(a, 10);
                        b = parseInt(b, 10);
                        return a > b ? newOrder : a < b ? oldOrder : 0;
                    }

                    // Column 0 is text.
                    if (a > b)
                        return newOrder;
                    if (a < b)
                        return oldOrder;
                    return 0;
                });

                // Appending an existing child again just moves it.
                for (i = 0; i < list.length; i++) {
                    tbody.appendChild(list[i]);
                }
            }

            // Add event handlers to column headers.
            function addHandlers(element, column) {
                element.onclick = (e) => sortTable(column);
                element.onkeydown = (e) => {
                    if (e.key == 'Enter' || e.key == ' ') {
                        sortTable(column);
                        e.preventDefault();
                    }
                };
            }

            function onLoad() {
                addHandlers(document.getElementById('nameColumnHeader'), 0);
                addHandlers(document.getElementById('sizeColumnHeader'), 1);
                addHandlers(document.getElementById('dateColumnHeader'), 2);
            }

            window.addEventListener('DOMContentLoaded', onLoad);
        </script>
    </head>
    <body>
        <h1 id="header">Index of /<?php echo $indexOfText?></h1>

        <div id="parentDirLinkBox" style="">
            <a id="parentDirLink" class="icon up" href="../">
                <span id="parentDirText">[parent directory]</span>
            </a>
        </div>

        <table>
            <thead>
                <tr class="header" id="theader">
                <th id="nameColumnHeader" tabindex="0" role="button">Name</th>
                <th id="sizeColumnHeader" class="detailsColumn" tabindex="0" role="button">
                    Size
                </th>
                <th id="dateColumnHeader" class="detailsColumn" tabindex="0" role="button">
                    Date modified
                </th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
                
                <?php
                    echo "<!-- We get files now, and add them one by one -->\n";
                    echo "<script>\n";
                    foreach ($files as $file) {
                        if ( $file === '.' || $file === '..' ) continue;
                        $fileSize = getFileSizeFormatted($dir . "\\" . $file);
                        $isDir = 0;
                        $fileDateMod = date("d/m/yy, H:i:s", filemtime($dir . "\\" . $file));

                        if ( is_dir($dir . "\\" . $file) ) {
                            $isDir = 1;
                        }

                        echo "addRow('$file', '$file', $isDir, 0, '$fileSize', 0, '$fileDateMod');\n";
                    }
                    echo '</script>'
                ?>
        </table>
    </body>
</html>
