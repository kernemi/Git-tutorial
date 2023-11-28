<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate_input($_POST["username"]);
    $password = validate_input($_POST["password"]);

    if (empty($username) || empty($password)) {
        $error_message = "Please fill in all fields.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $json_file = 'users.json';
        $users = json_decode(file_get_contents($json_file), true);

        if (isset($users[$username])) {
            $error_message = "Username already taken. Choose a different one.";
        } else {
            $users[$username] = [
                'username' => $username,
                'password' => $hashed_password
            ];

            file_put_contents($json_file, json_encode($users));

            header("Location: login.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>User Registration</h1>

    <?php
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>

    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
    <p><a href="index.php">Back to Homepage</a></p>
</body>
</html>

