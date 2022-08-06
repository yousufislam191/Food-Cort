<?php
include 'config.php';

// for admin profile pic submit
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

// for admin profile pic submit
if (isset($_FILES['web_logo'])) {
    $imageName = $_FILES['web_logo']['name'];
    $imageLocation = $_FILES['web_logo']['tmp_name'];

    $imageDestination = "../assets/logo/" . $imageName;
    $serverImagePathSave = substr($imageDestination, 3);

    $getProfileImgPath = "SELECT * FROM `admin_info`";
    $result = mysqli_query($connection, $getProfileImgPath);

    $profileImgUpdateQuery = "UPDATE `admin_info` SET `web_img`='$serverImagePathSave' WHERE a_id = '1'";
    if ($data  = mysqli_fetch_array($result)) {
        if (!empty($data['web_img'])) {
            unlink("../$data[web_img]");
            if (mysqli_query($connection, $profileImgUpdateQuery)) {
                move_uploaded_file($imageLocation, $imageDestination);
                echo "Updated Website Logo.";
            }
        } else {
            if (mysqli_query($connection, $profileImgUpdateQuery)) {
                move_uploaded_file($imageLocation, $imageDestination);
                echo "Updated Website Logo.";
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


// for category table submit
if (isset($_POST['addTableName'])) {
    if (!empty($_POST['addTableName'])) {
        $tableName = $_POST['addTableName'];
        $tableid = $tableName . "_id";
        $tableimg = $tableName . "_img";
        $tabletitle = $tableName . "_title";
        $tableprice = $tableName . "_price";

        $query = "CREATE TABLE $tableName(
            $tableid INT NOT NULL AUTO_INCREMENT,
            $tabletitle VARCHAR(100) NOT NULL,
            $tableprice VARCHAR(40) NOT NULL,
            $tableimg VARCHAR(500) NOT NULL,
            PRIMARY KEY ( $tableid )
         );";
        if ($connection->query($query) === TRUE) {
            $query = "INSERT INTO `category_name`(`c_name`) VALUES ('$tableName')";
            if (mysqli_query($connection, $query)) {
            }
            echo "$tableName category created successfully";
        } else {
            echo "Error creating table. " . $conn->error;
        }
    }
}