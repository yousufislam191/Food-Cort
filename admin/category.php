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
    <title>Admin Profile</title>
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
    <link href="../assets/logo/default_logo.png" rel="icon">

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
                    <a href="profile.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
                    <a href="#" class="nav_link"> <span class="material-symbols-outlined">category</span>
                        <span class="nav_name">Category</span> </a>
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
                <h2>Product Category</h2>
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
        <div class="mt-3 row">
            <div class="col-md-4 mb-3">
                <div class="col-md-8" id="dynamic_field">
                    <div class="d-flex align-middle gap-3 mb-2">
                        <input type="text" class="form-control" id="categoryInputField" name="categoryInputField" placeholder="add category name" value="">
                    </div>
                    <span id="showDatabaseMessage"></span>
                </div>
                <button type="button" class="btn btn-success d-flex align-center gap-2 mt-3" id="addCategoryInputField" style="transition: .3s;">
                    <span class="material-symbols-outlined" style="color: white;">add_box</span>Add
                    Category
                </button>
                <div class="mt-5 "><img src="../assets/default_img/privew_slider.jpg" class="img-thumbnail categoryimg" name="categoryselectimg" alt="" value=""></div>
            </div>
            <div class="col-md-5 mb-3">
                <form action="../serverSite/adminProductSubmit.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="categorytitle">Product Title</label>
                        <input type="text" required class="form-control" id="categorytitle" name="categorytitle" placeholder="Product Title" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="categoryprice">Product Price</label>
                        <input type="text" required class="form-control" id="categoryprice" name="categoryprice" placeholder="Product Price" value="">
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Product Image</label>
                        <input class="form-control" id="categoryformFile" required type="file" id="categoryimage" name="categoryimage" accept=".jpg, .jpeg, .png, .gif" onclick="return getCategoryImage();">
                        <span id="renameImage" style="color: red;"></span>
                    </div>
                    <select class="form-select" required aria-label="Default select example" id="selectCategory" name="selectCategory" style="text-transform: capitalize;">
                        <option selected disabled>Select Category</option>
                        <?php
                        include '../serversite/productCategoryList.php';

                        while ($row = mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $row['c_name'] ?>" style="text-transform: capitalize;">
                                <?php echo $row['c_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-primary text-uppercase btn-block" id="submiProducttbtn" style="font-weight: 600; transition: .3s;">Add Product</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 mb-3">
                <h5>List of Category</h5>
                <table class="table table-hover table-primary table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../serversite/productCategoryList.php';

                        while ($row = mysqli_fetch_array($result)) {  ?>
                            <tr class='align-middle tableHover'>
                                <td><?php echo $row['id']; ?></td>
                                <td style="text-transform: capitalize;"><?php echo $row['c_name']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
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