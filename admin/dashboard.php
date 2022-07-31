<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
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
            </div> <a href="../logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">Logout</span> </a>
        </nav>
    </div>
    <!--Container dashboard start-->
    <section class="dashboard pt-3">
        <div class="row">
            <div class="col-9 col-md-11">
                <h2>Slider</h2>
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
        <div class="row">
            <div class="col-md-6 gap-3">
                <img src="../assets/default_img/privew_slider.jpg" class="img-thumbnail sliderimg" alt="">
            </div>
            <div class="col-md-6">
                <form action="serverSite/admin.php" method="POST" id="registrationForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required class="form-control" id="title" name="title"
                            placeholder="Slider Title">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Sub-Title</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle"
                            placeholder="Slider Sub Title">
                    </div><br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" required class="form-control" id="description" rows="3" name="description"
                            placeholder="Slider Description"></textarea>
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" required id="formFile" accept=".jpg, .jpeg, .png, .gif"
                            onclick="return getImage();">
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check">
                        <label class="form-check-label" for="check">
                            Add Offer
                        </label>
                    </div><br>
                    <div class="row" id="offer">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerPrice">Offer Price</label>
                                <input type="text" class="form-control" id="offerPrice" name="offerPrice"
                                    placeholder="Offer Price">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerName">Offer Name</label>
                                <input type="text" class="form-control" id="offerName" name="offerName"
                                    placeholder="Offer Name">
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-success text-uppercase btn-block"
                            style="font-weight: 600; transition: .3s;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Container slider end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- admin js file -->
    <script src="../js/admin.js"></script>
</body>

</html>