<?php

include 'config.php';

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pass = $_REQUEST["password"];
$encyPass = password_hash($pass, PASSWORD_DEFAULT);

$search = "SELECT * FROM `user_info` WHERE u_email = '$email'";
$searchResult = mysqli_query($connection, $search);

if (mysqli_num_rows($searchResult) > 0) {
    echo "<script>alert('Email already exist')</script>";
    echo "<script>location.href='../index.php'</script>";
} else {
    $query = "INSERT INTO user_info(u_name, u_email, u_pass) VALUES('$name', '$email', '$encyPass')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Your registration has been successfully added in database')</script>";
        echo "<script>location.href='../index.php'</script>";
    } else {
        echo mysqli_error($connection);
    }
}