<?php
    include("../database.php");

    // input'tan gelen bilgileri degiskene atiyorum
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST["register"])) {
        // Basit örnek kontrol (örneğin boş bırakma durumu)
        if (empty($username) || empty($password)) {
            $errorMessage = "Please fill in all fields.";
        } else {
             $sql = "INSERT INTO users (username, password)
                VALUES ('$username', '$password')";
             mysqli_query($connection, $sql);
            $successMessage = "Registration successful!";
        }
       
    
    }

    mysqli_close($connection);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <div class="login-container">
        <h2>Register</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" value="">
            <input type="password" name="password" placeholder="Password" value="">
            <button type="submit" name="register">Create Account</button>
        </form>
        <!-- Hata veya başarı mesajı -->
        <?php if ($errorMessage): ?>
            <div class="errorMessage"><?php echo $errorMessage; ?></div>
        <?php elseif ($successMessage): ?>
            <div class="errorMessage" style="background-color:#4CAF50; border-color:#3e8e41;">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
    </div>


    <a href="../index.php" class="logout-btn">Go back</a>
</body>
</html>

