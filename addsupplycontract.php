<?php
    include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS FRS System | Supply Contract</title>
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
    <div>
    <div class="contentMove">
        <h1> Add Supply Page</h1>
        <p>Continue to add from here</p>
    </div>


    <?php
        include('hoverinclude/hoversupply.php');
    ?>

</body>
</html>