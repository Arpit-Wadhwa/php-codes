<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="88 submit.php" method="post">
        Name: <input type="text" name="name" required><br><br>

        Class:
        <select name="class" required>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select><br><br>

        Semester:
        <select name="semester" required>
            <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br><br>

        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>

        Mobile: <input type="text" name="mobile" required pattern="[0-9]{10}"><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>
