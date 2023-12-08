<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4-search.css">
    <title>Document</title>
</head>
<body>
    <h2>Search Flight</h2>
    <form action="" method = 'get' name ='register'>
        Origin <input type="text" name='origin'><br>
        Destination <input type="text" name ='destination'><br>
        <input type="submit" value='Search'><br>

    </form>
    <?php
            if(isset($_GET['origin']))
            {
                require 'connect.php';
                $origin = $_GET['origin'];
                $destination = $_GET['destination'];
                // echo"$destination";
                // echo"$origin";
                
                mysqli_set_charset($conn, 'UTF8'); //sua loi tieng viet
    
                $sql = "SELECT * FROM flights WHERE origin = '$origin' and destination = '$destination'";
                // $sql = 'SELECT * FROM flights ';
                $result = $conn->query($sql);
    
                require ('4-displayFlight.php');
                $conn->close();
                
                
            }
           
            
            

        
    ?>
    
</body>
</html>