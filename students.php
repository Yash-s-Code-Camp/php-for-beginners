<?php
    $HOST = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "hello-world";

    $conn =  mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME);

    if(!$conn){
       echo "Could not connect to the database.";
    }
    else{
        echo "Connection established!";
   }
?>

<!--
    1. mysql is not ruuning
    2. Unknown Host.
    3. incorrect username or password
    4. unknown database
 -->