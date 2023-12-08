<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');

    $sql = "UPDATE flights SET duration=355 WHERE id=1";

    if ($conn->query($sql) === TRUE)
    {
        echo " The selected flight has been updated";
    }
    else
    {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }

    $conn->close();
?>