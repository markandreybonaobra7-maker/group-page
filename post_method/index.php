
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 15px;
            color: #444;
            margin: 8px 0;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #4facfe;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submitted Information (POST Method)</h2>
        <?php
        if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['course'])) {
            echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
            echo "<p><strong>Age:</strong> " . htmlspecialchars($_POST['age']) . "</p>";
            echo "<p><strong>Course:</strong> " . htmlspecialchars($_POST['course']) . "</p>";
        } else {
            echo "<p>No data submitted yet.</p>";
        }
        ?>
        <a href="index.php">← Back to Form</a>
    </div>
</body>
