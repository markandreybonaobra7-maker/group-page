<!DOCTYPE html>
<html>
<head>
    <title>POST Method Activity</title>
</head>
<body>

    <h2>POST Method in PHP</h2>

    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name">

        <br><br>

        <label>Course:</label>
        <input type="text" name="course">

        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["name"]) && isset($_POST["course"])) {

        $name = $_POST["name"];
        $course = $_POST["course"];

        echo "<h3>Result:</h3>";
        echo "Hello, " . htmlspecialchars($name) . "!<br>";
        echo "Your course is " . htmlspecialchars($course) . ".";
    }
    ?>

</body>
</html>
