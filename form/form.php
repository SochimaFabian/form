<?php

if (!isset($username)) {
    $username = "";
}
if (!isset($password)) {
    $password = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Validation Form</title>
</head>

<body>
    <main>
        <form action="validate.php" method="post">
            <div class="img">
                <span>
                    <img src="streetart2.jpg" alt="">
                </span>
            </div>
            <div class="control">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username) ?>">
                <?php if (isset($name_error)) { ?>
                    <p class="err"><?php echo $name_error ?></p>
                <?php } ?>
            </div>

            <div class="control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($password) ?>">
                <?php if (isset($password_error)) { ?>
                    <p class="err"><?php echo $password_error ?></p>
                <?php } ?>
            </div>

            <div class="control">
                <button type="submit">Register</button>
            </div>
        </form>
    </main>
    <script src="/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>

</html>