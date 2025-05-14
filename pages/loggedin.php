<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOU ARE LOGGED IN! WELCOME</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="hello">
    <?php

        session_start();
        if (isset($_SESSION['username'])) {
            echo "hello " . "$_SESSION[username], " . "welcome to the PARTY! ^^";
        }

    ?>
    
    </h1>
        <br>
        <a href="../index.php" class="logout-btn">Log Out</a>

</body>
</html>