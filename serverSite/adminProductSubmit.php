<?php
include 'config.php';

$productTitle = $_POST['categorytitle'];
$productPrice = $_POST['categoryprice'];
$selectCategory = $_POST['selectCategory'];
$productImg = $_FILES['categoryimage'];

$productimageLocation = $productImg['tmp_name'];
$productimageName = $productImg['name'];
$productimageDestination = "../assets/product/" . $productimageName;
$serverImagePathSave = substr($productimageDestination, 3);


$c_title = $selectCategory . "_title";
$c_price = $selectCategory . "_price";
$c_img = $selectCategory . "_img";

$imgNameCheck = "SELECT * FROM `$selectCategory` WHERE $c_img = '$serverImagePathSave'";
$result = mysqli_query($connection, $imgNameCheck);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Already exists the same name image. Please rename your image before submit.')</script>";
    echo "<script>location.href='../admin/category.php'</script>";
} else {
    move_uploaded_file($productimageLocation, $productimageDestination);

    $query = "INSERT INTO `$selectCategory`(`$c_title`, `$c_price`, `$c_img`) VALUES ('$productTitle','$productPrice','$serverImagePathSave')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Submit successfully')</script>";
        echo "<script>location.href='../admin/category.php'</script>";
    } else {
        echo mysqli_error($connection);
    }
}
