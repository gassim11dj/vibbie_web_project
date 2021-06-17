<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Sign Up</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <form action="register_logic.php" method="post">
        <h1>SIGN UP</h1>
        <label for="full_name">Full Name
            <input type="text" name="fullname" id="full_name" placeholder="Full Name" required>
        </label>

        <label for="email">Email
            <input type="email" name="email" id="email" placeholder="Email" required>
        </label>

        <label for="password">Password
            <input type="password" name="password" id="password" placeholder="Password" required>
            <!-- <span>Must contain: One Uppercase, One Lowercase, and One Number</span> 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
        </label>

        <label for="re-password">Retype Password
            <input type="password" name="retype_password" id="re-password" placeholder="Retype Password" required>
        </label>

        <button>Sign Up</button>
        <br>
        <span>Already have an account? <a href="login.php">Log in</a> instead</span>
    </form>
</body>
</html>