<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="registration.inc.php" method="POST" style="max-width: 250px; margin:auto;">
    <p>
        <label for="first_name">First name</label>
        <input type="text" id="first_name" name="first_name">
    </p>

    <p>
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="pwd">
    </p>

    <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </p>

    <p>
        <button type="submit" name="submit">Register</button>
    </p>
</form>
</body>
</html>