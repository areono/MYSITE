<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #0056b3;
        }
        form {
            margin-top: 20px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #0056b3;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #004090;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Simple PHP Web Page</h1>
    <p>Enter your name below, and I'll greet you!</p>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        echo "<h2>Hello, $name! Welcome to my PHP web page.</h2>";
    }
    ?>
</body>
</html>  

