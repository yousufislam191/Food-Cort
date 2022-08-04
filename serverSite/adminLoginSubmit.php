<?php

include 'config.php';

session_start();

$email = $_REQUEST["adminEmail"];
$pass = $_REQUEST["adminPassword"];

if (isset($_SESSION['admin_email'])) {
    echo "<script>location.href='../admin/dashboard.php'</script>";
}

$sql = "SELECT * FROM `admin_info` WHERE a_email = '$email'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($pass, $row['a_pass']);
    if ($verify == 1) {
        echo "<script>alert('Admin Login Successfully!!..')</script>";
        $_SESSION['admin_email'] = $email;
        echo "<script>location.href='../admin/dashboard.php'</script>";
    } else {
        echo "<script>alert('Invalid Password!!..')</script>";
        echo "<script>location.href='../admin/index.php'</script>";
    }
} else {
    echo "<script>alert('Invalid Email!!..')</script>";
    echo "<script>location.href='../admin/index.php'</script>";
}
