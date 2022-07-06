<?php

$sname = "localhost";
$uname = "root";
$passwd = "";

$db_name = "nus";

$conn = mysqli_connect($sname, $uname, $passwd, $db_name);
session_start();

if(!$conn) {
    echo "Connection failed...!";
} else {
    // echo "success";
}

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$newpassword = $_POST["newpassword"];
$password = $_POST["confirmpassword"];

// if($newpassword === $password) {
//     //successful
//     echo "Success";
// } else {
//     header("Location: index.php?error=Incorrect Username or Password has been entered...!");
// }

$sql = "SELECT ID FROM users WHERE user='$fullname'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $newvalue = $row['id'];

        $sql = "UPDATE users SET password='$password' WHERE ID='$newvalue'";

        if (mysqli_query($conn, $sql)) {
            // echo "Record updated successfully";
            header('Location: signin.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }


    }
} else {
    echo "No Data";
}

?>