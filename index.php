<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Ex 1, 2, 3

    $dir = 'img/';
    $images = scandir($dir);
    for ($i = 0; $i < count($images); $i++) {
        if ($images[$i] != '..' and $images[$i] != '.') {
            echo '<a href="' . $dir . $images[$i] . '"><img src=' . $dir . $images[$i] . ' style="width: 250px; padding: 25px;"></a>';
        }
    }

    // Ex 4

    function four($path) {
        $folders = scandir($path);
        foreach ($folders as $folder) {
            if ($folder == '..' or $folder == '.') {
                continue;
            }
            $name = $path . '/' . $folder;
            echo $name . '<br>';
            if (is_dir($name)) {
                four($name);
            }
        }
    }
    
    four('C:\Users\Public');

   

    ?>
</body>
</html>