<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $result = mysqli_query($link, "SELECT `id`, `photo` FROM `img` ORDER BY count DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            $imgM = $row['photo'];
            $id = $row['id'];
            echo "<a href='img.php?id=id' target='_blank'><img src=img/$imgM></a>";
        }
    ?>
</body>
</html>