<?php
include '88 db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    // Extract first name
    $first_name = explode(" ", trim($name))[0];

    // Insert into database
    $sql = "INSERT INTO students (name, class, semester, gender, mobile)
            VALUES ('$name', '$class', $semester, '$gender', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "<h4>Thanks, $first_name! Your registration was successful.</h4>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
