<?php
include('db.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$result = mysqli_query($link, "SELECT `photoM` FROM `img` WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
if (empty($row)) {
    header('Location: index.php');
    exit;
}
mysqli_query($link, "UPDATE `img` SET count = count + 1 WHERE img.id = $id");
$src = $row['photoM'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        echo "<img src=img/$src";
        ?>
    </div>
</body>
</html>