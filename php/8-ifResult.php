<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
   <body> 
      <?php
         $USD = 22300;
         $EUR = 27300;
         $AUD = 17000;
         $JPY = 120;
         $amount = $_GET['response'];
         echo " $amount USD is equal ";
         if ($_GET["response"] == "USD")
         {
            echo $amount * $USD;
         }
         elseif ($_GET["response"] == "EUR") { 
            echo $amount * $EUR;
         }
         elseif ($_GET["response"] == "AUD") {
            echo $amount * $AUD;
         }
         elseif ($_GET["response"] == "JPY") {
            echo $amount * $JPY;
         }

         echo "VND";
      ?>
   </body>
</html>