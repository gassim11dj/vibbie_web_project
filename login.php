<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Login</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <form action="login_logic.php" method="post">
        <h1>LOGIN</h1>
        <label for="email">Email
            <input type="email" name="email" id="email" placeholder="Email">
        </label>

        <label for="password">Password
            <input type="password" name="password" id="password" placeholder="Password">
        </label>

        <button>Login</button>
        <br>
        <span>Don't have an account? <a href="register.php">Create Account</a></span>
    </form>
</body>
</html>