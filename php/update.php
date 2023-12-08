<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        echo '<form method="post" action="">';

        require ('connect.php');
        mysqli_set_charset($conn, 'UTF8');

        $sql = "SELECT * FROM passengers";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            echo "<table border="">
                <caption>Sold Ticket</caption>
                <tr>
                    <th>Select</th>
                    <th>Passenger Name</th>
                    <th>Flight ID</th>
                </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td> <input type=checkbox name='checkbox[]' value='".$row['id']."' >" . "</td>". 
                    "<td>" . $row["name"]. "</td>". 
                    "<td>" . $row["flight_id"]. "</td></tr>";
            }
        }
        echo '<input type="submit" name="delete" value="CANCEL TICKET" />
            </form>' ;
    ?>

    <?php
        if (isset($_POST['delete']))
        {
            if (isser($_POST['checkbox']))
            {
                $chkarr= $_POST['checkbox'];
                foreach ($chkarr as $id)
                {
                    $sql = "DELETE FROM passengers WHERE id = '$id'";
                    $result = $conn->query($sql);
                    header("location: 5-delete2.php");
                    echo " Đã hủy các vé được chọn";
                }
            }
        }

        $conn->close();
    ?>
</body>
</html>