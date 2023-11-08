<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <?php
   $text = $_GET['vanban'];
   $kytu = $_GET['kytu'];

    echo substr_count($text, $kytu);
    ?>
</body>
</html>