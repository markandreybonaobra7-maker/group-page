<!DOCTYPE html>
<html>
<head>
    <title>GET Method Activity</title>
</head>
<body>

    <h2>GET Method in PHP</h2>

    <form method="GET" action="">
        <label>Name:</label>
        <input type="text" name="name">

        <br><br>

        <label>Course:</label>
        <input type="text" name="course">

        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET["name"]) && isset($_GET["course"])) {

        $name = $_GET["name"];
        $course = $_GET["course"];

        echo "<h3>Result:</h3>";
        echo "Hello, " . htmlspecialchars($name) . "!<br>";
        echo "Your course is " . htmlspecialchars($course) . ".";
    }
    ?>

</body>
</html>
