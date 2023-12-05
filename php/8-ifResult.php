<?php
   $severname = "localhost";
   $username = "root";
   $password = "";
   $db = "myDB";

   $conn = new mysqli($severname, $username, $password, $db);

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connection_error);
   }
   echo "Connected successfully <br>";
?>