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
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="profile.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
                    <a href="category.php" class="nav_link"> <span class="material-symbols-outlined">category</span>
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
    <section class="dashboard pt-3">
        <div class="row">
            <div class="col-9 col-md-11">
                <h2>Slider</h2>
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
        <div class="row" id="submitSlider">
            <div class="col-md-6 gap-3">
                <div><img src="../assets/default_img/privew_slider.jpg" class="img-thumbnail sliderimg" name="selectimg" alt="" value=""></div>
            </div>
            <div class="col-md-6">
                <form action="../serverSite/sliderInsert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required class="form-control" id="title" name="title" placeholder="Slider Title" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Sub-Title</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle" placeholder="Slider Sub Title" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" required class="form-control" id="description" rows="3" name="description" placeholder="Slider Description" value=""></textarea>
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" id="formFile" required type="file" name="image" accept=".jpg, .jpeg, .png, .gif" onclick="return getImage();">
                        <span id="renameImage" style="color: red;"></span>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check">
                        <label class="form-check-label mr-3" for="check">
                            Add Offer
                        </label>
                    </div><br>
                    <div class="row" id="offer">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerPrice">Offer Price</label>
                                <input type="text" class="form-control" id="offerPrice" name="offerPrice" placeholder="Offer Price" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerName">Offer Name</label>
                                <input type="text" class="form-control" id="offerName" name="offerName" placeholder="Offer Name" value="">
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-primary text-uppercase btn-block" id="submitbtn" style="font-weight: 600; transition: .3s;">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row" id="updateSlider">
            <div class="col-md-6 ">
                <img src="" class="img-thumbnail Updatesliderimg" name="Updateselectimg" alt="" value="" id="UpdateShowImg">
            </div>
            <div class="col-md-6">
                <form action="../serverSite/sliderUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required class="form-control" id="title" name="Updatetitle" placeholder="Slider Title" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Sub-Title</label>
                        <input type="text" class="form-control" id="subTitle" name="UpdatesubTitle" placeholder="Slider Sub Title" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" required class="form-control" id="description" rows="3" name="Updatedescription" placeholder="Slider Description" value=""></textarea>
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" id="UpdateformFile" type="file" name="Updateimage" accept=".jpg, .jpeg, .png, .gif" onclick="return UpdategetImage();">
                        <span id="renameImage" style="color: red;"></span>
                    </div><br>
                    <div class="form-group border border-danger rounded p-3">
                        <div><label for="description" class="text-danger">Do not change anything in this field.</label>
                        </div>
                        <input type="text" name="UpdatesliderId" id="" size="1">
                        <input type="text" name="Updateselectimg2" id="">
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ucheck">
                        <label class="form-check-label" for="ucheck">
                            Add Offer
                        </label>
                    </div><br>
                    <div class="row" id="uoffer">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerPrice">Offer Price</label>
                                <input type="text" class="form-control" id="offerPrice" name="UpdateofferPrice" placeholder="Offer Price" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerName">Offer Name</label>
                                <input type="text" class="form-control" id="offerName" name="UpdateofferName" placeholder="Offer Name" value="">
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-success text-uppercase btn-block" name="updatebtn" style="font-weight: 600; transition: .3s;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Container slider end-->

    <!--Table start-->
    <section>
        <h2 class="text-center mt-5 mb-3 text-light pt-3 pb-3" style="background-color: #37517E;">List of Slider</h2>
        <!-- nowrap-->
        <table class="table table-hover table-striped table-bordered dt-responsive" id="example" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Image</th>
                    <th scope="col">Offer Price</th>
                    <th scope="col">Offer Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include '../serversite/fetchIndexPageData.php';

                while ($row = mysqli_fetch_array($result)) {  ?>
                    <tr class='align-middle tableHover'>

                        <td hidden data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_id']; ?></td>
                        <td data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_title']; ?></td>
                        <td data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_subtitle']; ?></td>
                        <td hidden data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_img_path']; ?></td>
                        <td data-id="<?php echo $row['s_id']; ?>"><img src="../<?php echo $row['s_img_path']; ?>" class='img-thumbnail sliderTableImg' alt=' srcset='>
                        </td>
                        <td data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_offer_price']; ?></td>
                        <td data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_offer_name']; ?></td>
                        <td data-id="<?php echo $row['s_id']; ?>"><?php echo $row['s_description']; ?></td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" data-toggle='tooltip' data-placement='bottom' title='Update'><span class=" material-symbols-outlined text-light p-2 rounded bg-success editbtn" data-id="<?php echo $row['s_id']; ?>">update</span></a>
                                <a href="../serversite/sliderDelete.php?id=<?php echo $row['s_id']; ?>&imgPath=<?php echo $row['s_img_path']; ?>" data-toggle='tooltip' data-placement='bottom' title='Delete'><span class="material-symbols-outlined text-light p-2 rounded bg-danger">delete</span></a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <!--Table End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- data table js file -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <!-- admin js file -->
    <script src="../js/admin.js"></script>
    <script src="../js/ajax.js"></script>
</body>

</html>