<?php

include 'config.php';

session_start();

$email = $_REQUEST["loginEmail"];
$pass = $_REQUEST["loginPassword"];

if (isset($_SESSION['user_email'])) {
    echo "<script>location.href='../clientSite/home.php'</script>";
}

$sql = "SELECT * FROM `user_info` WHERE u_email = '$email'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($pass, $row['u_pass']);
    if ($verify == 1) {
        echo "<script>alert('Login Successfully!!..')</script>";
        $_SESSION['user_email'] = $email;
        echo "<script>location.href='../admin/dashboard.php'</script>";
    } else {
        echo "<script>alert('Invalid Password!!..')</script>";
        echo "<script>location.href='../index.php'</script>";
    }
} else {
    echo "<script>alert('Invalid Email!!..')</script>";
    echo "<script>location.href='../index.php'</script>";
}