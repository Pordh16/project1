<?php

if(isset($_GET["temperature"])) {
   $temperature = $_GET["temperature"]; // get temperature value from HTTP GET


   $servername = "localhost";
   $username = "root";
   $password = "PORDh2549";
   $database_name = "project1";

   // Create MySQL connection fom PHP to MySQL server
   $connection = new mysqli($servername, $username, $password, $database_name);
   // Check connection
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   } 
   include connection_aborted ; 
   $sql = "INSERT INTO tbl_temp (temp_value) VALUES ($temperature)";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $conn->error;
   }

   $conn->close();
} else {
   echo "temperature is not set in the HTTP request";
}
?>
