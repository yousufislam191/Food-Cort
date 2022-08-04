<?php
include 'config.php';

// session_start();

$title = $_REQUEST["Updatetitle"];
$subtitle = $_REQUEST["UpdatesubTitle"];
$description = $_REQUEST["Updatedescription"];
$offerPrice = $_REQUEST["UpdateofferPrice"];
$offerName = $_REQUEST["UpdateofferName"];
$newimage = $_FILES["Updateimage"];
$sliderId = $_REQUEST["UpdatesliderId"];
$oldimg = $_REQUEST["Updateselectimg2"];


$newimageLocation = $newimage['tmp_name'];
$newimageName = $newimage['name'];
$newimageDestination = "../assets/slider/" . $newimageName;
$serverImagePathSave = substr($newimageDestination, 3);

if (empty($newimageName)) {
    $sliderUpdateQuery = "UPDATE `slider` SET `s_title`='$title',`s_subtitle`='$subtitle',`s_description`='$description',`s_offer_price`='$offerPrice',`s_offer_name`='$offerName' WHERE s_id = $sliderId";
    if (mysqli_query($connection, $sliderUpdateQuery)) {
        echo "<script>alert('Update successfully')</script>";
        echo "<script>location.href='../admin/dashboard.php'</script>";
    } else {
        echo mysqli_error($connection);
    }
} else {
    $imgNameCheck = "SELECT * FROM `slider` WHERE s_img_path = '$serverImagePathSave'";
    $result = mysqli_query($connection, $imgNameCheck);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Already exists the same name image. Please rename your image before update.')</script>";
        echo "<script>location.href='../admin/dashboard.php'</script>";
    } else {
        $sliderUpdateQuery = "UPDATE `slider` SET `s_title`='$title',`s_subtitle`='$subtitle',`s_description`='$description',`s_img_path`='$serverImagePathSave',`s_offer_price`='$offerPrice',`s_offer_name`='$offerName' WHERE s_id = $sliderId";
        if (mysqli_query($connection, $sliderUpdateQuery)) {
            move_uploaded_file($newimageLocation, $newimageDestination);
            unlink("../$oldimg");
            echo "<script>alert('Update successfully')</script>";
            echo "<script>location.href='../admin/dashboard.php'</script>";
        } else {
            echo mysqli_error($connection);
        }
    }
}
