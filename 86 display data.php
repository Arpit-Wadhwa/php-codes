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
    
    $sql = "SELECT Stud_ID, Stud_Name, Stud_Email, Stud_Contact
    FROM student";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>ID: " . $row["Stud_ID"].
    " | Name: " . $row["Stud_Name"].
    " | Email: " . $row["Stud_Email"].
    " | Contact: " . $row["Stud_Contact"]."</p>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
echo "<br>";
echo "Program by Arpit wadhwa,2220100241";
?>