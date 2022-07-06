<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS FRS System | Sign-in</title>
    <link rel="icon" href="img/social-square-n-blue.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="signiContainer">
        <form action="login.php" method="post" class="signinForm">
            <img src="img/nus-logo-2020.svg" alt="NUS Consulting Group Logo">
            <h2>Sign in</h2>
            <?php if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
            <label>Email address</label>
            <input type="text" name="username" placeholder="name@address.com" required>
            <label>Password <a href="password.php" class="pagerefColor moveLeft">Forgot Password?</a></label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Sign in" class="signinButton">
        </form>
    </div>
</body>
</html>