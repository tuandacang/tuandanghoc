<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <?php
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];

    if($number1 > $number2){
    $solonhon = $number1;
    }
    else { 
    $solohon = $number2;
    }
    echo ' Số lớn hơn là: '.$solonhon;
    ?>
</body>
</html>