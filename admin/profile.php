<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    echo "Can not access through url";
    echo "<script>location.href='../index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Flat Icons -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <!-- Box Icons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">

    <!-- Favicons -->
    <link href="../assets/logo/logo.png" rel="icon">

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <h1 style="color: #37517E;">Admin Dashboard</h1>
        <div class="header_img">
            <?php
            include '../serverSite/adminProfileGet.php';
            while ($row = mysqli_fetch_array($result)) {
                if (!empty($row['a_img'])) {
                    echo "<img src='../$row[a_img]' alt=''>";
                } else { ?>
                    <img src="../assets/default_img/default_profile.png" alt="" value="">
            <?php
                }
            }
            ?>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <?php
                    include '../serverSite/adminProfileGet.php';
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <span class="nav_logo-name" style="text-transform: uppercase;"><?php echo $row['web_name'] ?></span>
                    <?php
                    }
                    ?>
                </a>
                <div class="nav_list">
                    <a href="dashboard.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
        </nav>
    </div>
    <!--Container dashboard start-->
    <section class="dashboard pt-3 pb-3">
        <div class="row">
            <div class="col-9 col-md-11">
                <h2>Update Profile</h2>
            </div>
            <div class="col-3 col-md-1">
                <a href="../index.php">
                    <h5 class="text-primary d-flex align-items-center gap-2"><span class="material-symbols-outlined">home</span>Home</h5>
                </a>
            </div>
        </div>
    </section>
    <!--Container dashboard end-->

    <!--Container slider start-->
    <section>
        <div class="row" id="adminProfile">
            <div class="col-md-4 col-12 gap-3 mb-3">
                <div class="row">
                    <div class="col-md-7 col-6">
                        <div>
                            <?php
                            include '../serversite/adminProfileGet.php';

                            while ($row = mysqli_fetch_array($result)) {
                                if (!empty($row['a_img'])) {
                                    echo "<img src='../$row[a_img]' alt='' class=' img-thumbnail rounded adminProfileimg' name='selectimg'>";
                                } else { ?>
                                    <img src="../assets/default_img/default_profile.png" class=" img-thumbnail rounded adminProfileimg" name="selectimg" alt="" value="">
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="mt-3"><span id="showMessage"></span></div>
                    </div>
                    <div class="col-md-5 col-6">
                        <form>
                            <button class="btn btn-primary mb-3 me-3 btn-file" style="transition: .3s;">Browse Image
                                <input type="file" id="adminformFile" name="image" accept=".jpg, .jpeg, .png" onclick="return getAdminImage();">
                            </button>
                        </form>
                        <button class="btn btn-success" id="adminImgSubmit" type="submit" style="transition: .3s;">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <form action="../serverSite/adminProfileSubmit.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <div class="d-flex align-middle gap-3">
                            <?php
                            include '../serverSite/adminProfileGet.php';
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook url" value="<?php echo $row['fb'] ?>">
                            <?php
                            }
                            ?>
                            <span class="material-symbols-outlined donebtn facebook" style="cursor: pointer;">done</span>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label for="title">Instagram</label>
                        <div class="d-flex align-middle gap-3">
                            <?php
                            include '../serverSite/adminProfileGet.php';
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <input type="text" required class="form-control" id="instagram" name="instagram" placeholder="instagram url" value="<?php echo $row['instagram'] ?>">
                            <?php
                            }
                            ?>
                            <span class="material-symbols-outlined donebtn instagram" style="cursor: pointer;">done</span>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Skype</label>
                        <div class="d-flex align-middle gap-3">
                            <?php
                            include '../serverSite/adminProfileGet.php';
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <input type="text" required class="form-control" id="skype" name="skype" placeholder="skype url" value="<?php echo $row['skype'] ?>">
                            <?php
                            }
                            ?>
                            <span class="material-symbols-outlined donebtn skype" style="cursor: pointer;">done</span>
                        </div>
                    </div><br>
                </form>
            </div>
            <div class="col-md-4 col-6">
                <form action="../serverSite/adminProfileSubmit.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="subTitle">Linkedin</label>
                        <div class="d-flex align-middle gap-3">
                            <?php
                            include '../serverSite/adminProfileGet.php';
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <input type="text" required class="form-control" id="linkedin" name="linkedin" placeholder="linkedin url" value="<?php echo $row['linkedin'] ?>">
                            <?php
                            }
                            ?>
                            <span class="material-symbols-outlined donebtn linkedin" style="cursor: pointer;">done</span>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Twitter</label>
                        <div class="d-flex align-middle gap-3">
                            <?php
                            include '../serverSite/adminProfileGet.php';
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <input type="text" required class="form-control" id="twiter" name="twiter" placeholder="twitter url" value="<?php echo $row['twiter'] ?>">
                            <?php
                            }
                            ?>
                            <span class="material-symbols-outlined donebtn twiter" style="cursor: pointer;">done</span>
                        </div>
                    </div><br>
                </form>
            </div>
            <div class="col-md-4 col-6">
                <label for="subTitle">Website Name</label>
                <div class="d-flex align-middle gap-3">
                    <?php
                    include '../serverSite/adminProfileGet.php';
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <input type="text" class="form-control" id="websiteName" name="websiteName" placeholder="website Name" value="<?php echo $row['web_name'] ?>">
                    <?php
                    }
                    ?>
                    <span class="material-symbols-outlined donebtn websiteName" style="cursor: pointer;">done</span>
                </div>
            </div>
        </div>
    </section>
    <!--Container slider end-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- data table js file -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <!-- admin js file -->
    <script src="../js/admin.js"></script>
    <script src="../js/ajax.js"></script>
</body>

</html>