





<?php
$error;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dsn = "mysql:host=localhost;dbname=ex";
    $usernameDB = "root";
    $passwordDB = "";

    try {
        $pdo = new PDO($dsn, $usernameDB, $passwordDB);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
        } else {
            $error = "Неверное имя пользователя или пароль";
        }
    } catch (PDOException $e) {
        $error = "Ошибка: " . $e->getMessage();
    }

    $pdo = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="box">
                <h2>Вход</h2>
                <form method="post">
                    <label for="username">Имя пользователя:</label>
                    <input type="text" name="username" id="username" required><br>
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" id="password" required><br>
                    <input type="submit" value="Войти">
                    <?php
                    
                        if (!empty($error)) {
                            echo '<p class="error">' . $error . '</p>';
                        }

                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>