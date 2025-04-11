<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "John";
    $_SESSION["lastname"] = "Smith";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
echo "<br>";
echo "Program by Arpit wadhwa,2220100241";

?>