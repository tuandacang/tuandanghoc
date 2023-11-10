<html>
<head>
<title> Ket qua giai phuong trinh!!</title>
</head>
<body>
<?php
   $B=$_GET["b"];
   $C=$_GET["c"];
   $A=$_GET["a"];
   if($A==0)
      if($B==0)
         if($C==0)
            echo "Phương trình có vô số nghiệm.";
         else
            echo "Phương trình này tôi xin bó tay.";
      else
      {
         echo "Phương trình bậc 1 có dạng: ".$B." X + ".$C." = 0 <br/>";
         echo "Phương trình có nghiệm: "."X = ". -$C/$B. "<br/>";
      }
   else
   {
      echo "Phương trình có dạng: ".$A." X2 + ".$B." X + ".$C." = 0 <br/>";
      $delta=pow($B,2)-4*$A*$C; 
      if($delta==0)
      {
         echo "Phương trình có nghiệm kép X1 = X2 = ".-$B/(2*$A)."<br/>";
      }
      else
      {
         if($delta<0)
         {
            echo "Phương trình vô nghiệm.";
         }
         else
         {
            $X1=(-$B+sqrt($delta))/(2*$A);
            $X2=(-$B-sqrt($delta))/(2*$A);
            echo "Phương trình có 2 nghiệm: <br/>";
            echo "X1 = ".$X1."<br/>";
            echo "X2 = ".$X2."<br/>";
         }
      }
   }
?>

</body>
</html>