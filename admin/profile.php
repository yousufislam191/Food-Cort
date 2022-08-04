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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Google Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        <div class="header_img"> <img src="../assets/profile/profile.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">ARSHA</span> </a>
                <div class="nav_list">
                    <a href="dashboard.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                            class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                            class="nav_name">Users</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                            class="nav_name">Messages</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                            class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Stats</span> </a>
                </div>
            </div> <a href="adminlogout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">Logout</span> </a>
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
                    <h5 class="text-primary d-flex align-items-center gap-2"><span
                            class="material-symbols-outlined">home</span>Home</h5>
                </a>
            </div>
        </div>
    </section>
    <!--Container dashboard end-->

    <!--Container slider start-->
    <section>
        <div class="row" id="adminProfile">
            <div class="col-md-4 col-4 gap-3">
                <div><img src="../assets/default_img/default_profile.png"
                        class="img-thumbnail rounded-circle adminProfileimg" name="selectimg" alt="" value="">
                </div>
            </div>
            <div class="col-md-6">
                <form action="../serverSite/adminProfileSubmit.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <input type="text" required class="form-control" id="title" name="title"
                            placeholder="facebook url" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Linkedin</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="linkedin url"
                            value="">
                    </div><br>
                    <div class="form-group">
                        <label for="title">Instagram</label>
                        <input type="text" required class="form-control" id="title" name="title"
                            placeholder="instagram url" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Twitter</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="twitter url"
                            value="">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Skype</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="skype url"
                            value="">
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" id="adminformFile" type="file" name="image"
                            accept=".jpg, .jpeg, .png" onclick="return getAdminImage();">
                    </div><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-success text-uppercase btn-block" id="submitbtn"
                            style="font-weight: 600; transition: .3s;">Update</button>
                    </div>
                </form>
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
</body>

</html>