<?php


// echo "Hello";
session_start();
include "dbconn.php";


if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        header("Location: signin.php?error=Username is required");
        exit();


    } else if(empty($password)) {
        header("Location: signin.php?error=Password is required");
        exit();
    } else {
        // echo "Validate Input";
        $sql = "SELECT * FROM nususerdata where emailId = '$username' AND binary password='$password' AND accountstatus=1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // print_r($row);

            if($row['emailId']===$username && $row['password'] === $password) {
                // echo "Successfully logged in...!";

                $_SESSION['username'] = $row['emailId'];
                $_SESSION['user'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $role = $row['role'];

                header("Location: index.php");
                exit();

            } else {
                header("Location: signin.php?error=Incorrect Username or Password has been entered...!");
                exit();
            }
        } else {
            header("Location: signin.php?error=Incorrect Username or Password has been entered...!");
            exit();
        }
    }
} 

else {
    header("Location: signin.php?error");
    exit();
}




?>