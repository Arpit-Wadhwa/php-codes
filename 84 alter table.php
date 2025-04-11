<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // sql to create table
    $sql = "ALTER TABLE student
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table student altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    
    $conn->close();
echo "<br>";
echo "Program by Arpit wadhwa,2220100241";        
?>