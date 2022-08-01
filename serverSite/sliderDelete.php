<?php

include 'config.php';

$id = $_GET['id'];
$imgpath = $_GET['imgPath'];

$query = "DELETE FROM `slider` WHERE s_id = $id";
mysqli_query($connection, $query);
unlink("../$imgpath");

header("location:../admin/dashboard.php");