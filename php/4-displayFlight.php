<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <?php
        if($result -> num_rows > 0)
        {
            echo"
            <table border = '1' width =50% align ='center'>
            <caption> <b> Bảng thông tin chuyến bay </b></caption>
            <tr>
                <th>ID</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Duration</th>
            </tr>";
            while($row = $result -> fetch_assoc())
            {
                if($row['id'] % 2 ==0)
                {
                    echo"<tr class ='odd'><td>". $row['id']. "</td>";
                }
                else
                {   
                    echo"<tr class ='even'><td>". $row['id']. "</td>";
                }
                echo"<td>" . $row['origin']. "</td>".
                    "<td>" . $row['destination']. "</td>".
                    "<td>" . $row['duration']. "</td></tr>";
            }
        }
        else{
            echo"No flight in database";
        }
    ?>
    <h1>Vũ Tuấn Anh 21210503596</h1>
    
</body>
</html>