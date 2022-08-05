<?php
include 'config.php';

// if (isset($_POST['fburl'])) {
$url = $_POST['fburl'];
$fburl = "UPDATE `admin_info` SET `fb`='$url' WHERE a_id = '1'";
if (mysqli_query($connection, $fburl)) {
    echo "Updated facebook url.";
}
// }