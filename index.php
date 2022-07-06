<?php
    include('security.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS FRS System</title>
    <link rel="icon" href="img/social-square-n-blue.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div class="main">
        <div class="menu">

            <?php
                include('sidebar.php');
            ?>
        </div>
        <div class="mainContainer indexWrapper">
            <span class="bodyWelcome">Hi<strong> <?php echo $_SESSION['user']; ?>,</strong></span>
            <span class="bodyWelcome">Welcome to</span>
            <h1>NUS FRS System</h1>
            <span class="bodySent">Hope you are doing well...!</span>
            <p>Please find it helpful to navigate through different tabs for your needs!</p>
            <span class="indexDisclaimer"> &#9733; &#9733; press on the <em>NUS logo</em> for this page  &#9733; &#9733;</span>
        </div>
    </div>
</body>
</html>