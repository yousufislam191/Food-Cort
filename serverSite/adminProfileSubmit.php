<?php
include 'config.php';

if (isset($_FILES['my_image'])) {
    $imageName = $_FILES['my_image']['name'];
    $imageLocation = $_FILES['my_image']['tmp_name'];

    $imageDestination = "../assets/profile/" . $imageName;
    $serverImagePathSave = substr($imageDestination, 3);

    $getProfileImgPath = "SELECT * FROM `admin_info`";
    $result = mysqli_query($connection, $getProfileImgPath);

    $profileImgUpdateQuery = "UPDATE `admin_info` SET `a_img`='$serverImagePathSave' WHERE a_id = '1'";
    if ($data  = mysqli_fetch_array($result)) {
        if (!empty($data['a_img'])) {
            unlink("../$data[a_img]");
            if (mysqli_query($connection, $profileImgUpdateQuery)) {
                move_uploaded_file($imageLocation, $imageDestination);
                echo "Your image saved.";
            }
        } else {
            if (mysqli_query($connection, $profileImgUpdateQuery)) {
                move_uploaded_file($imageLocation, $imageDestination);
                echo "Your image saved.";
            }
        }
    } else {
        echo mysqli_error($connection);
    }
}

// for Website Name submit
if (isset($_POST['websiteName'])) {
    if (!empty($_POST['websiteName'])) {
        $url = $_POST['websiteName'];
        $query = "UPDATE `admin_info` SET `web_name`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
            echo "Updated Your Website Name.";
        }
    }
}

// for admin fb url submit
if (isset($_POST['fburl'])) {
    if (!empty($_POST['fburl'])) {
        $url = $_POST['fburl'];
        $query = "UPDATE `admin_info` SET `fb`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
        }
    }
}
// for admin instagram url submit
if (isset($_POST['insturl'])) {
    if (!empty($_POST['insturl'])) {
        $url = $_POST['insturl'];
        $query = "UPDATE `admin_info` SET `instagram`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
        }
    }
}
// for admin linkedin url submit
if (isset($_POST['linkurl'])) {
    if (!empty($_POST['linkurl'])) {
        $url = $_POST['linkurl'];
        $query = "UPDATE `admin_info` SET `linkedin`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
        }
    }
}
// for admin twitter url submit
if (isset($_POST['twiturl'])) {
    if (!empty($_POST['twiturl'])) {
        $url = $_POST['twiturl'];
        $query = "UPDATE `admin_info` SET `twiter`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
        }
    }
}
// for admin skype url submit
if (isset($_POST['skyurl'])) {
    if (!empty($_POST['skyurl'])) {
        $url = $_POST['skyurl'];
        $query = "UPDATE `admin_info` SET `skype`='$url' WHERE a_id = '1'";
        if (mysqli_query($connection, $query)) {
        }
    }
}