<?php
include 'config.php';

// session_start();

$title = $_REQUEST["title"];
$subtitle = $_REQUEST["subTitle"];
$description = $_REQUEST["description"];
$offerPrice = $_REQUEST["offerPrice"];
$offerName = $_REQUEST["offerName"];
$image = $_FILES["image"];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDestination = "../assets/slider/" . $imageName;
$serverImagePathSave = substr($imageDestination, 3);

$imgNameCheck = "SELECT * FROM `slider` WHERE s_img_path = '$imageDestination'";
$result = mysqli_query($connection, $imgNameCheck);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Already exists the same name image. Please rename your image before submit.')</script>";
    echo "<script>location.href='../admin/dashboard.php'</script>";
} else {
    move_uploaded_file($imageLocation, $imageDestination);

    $query = "INSERT INTO `slider`(`s_title`, `s_subtitle`, `s_description`, `s_img_path`, `s_offer_price`, `s_offer_name`) VALUES ('$title','$subtitle','$description','$serverImagePathSave','$offerPrice','$offerName')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Submit successfully')</script>";
        echo "<script>location.href='../admin/dashboard.php'</script>";
    } else {
        echo mysqli_error($connection);
    }
}
