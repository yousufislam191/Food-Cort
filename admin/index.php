<?php
session_start();
if (isset($_SESSION['admin_email'])) {
    echo "<script>location.href='dashboard.php'</script>";
}
?>
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

    <!-- Favicons -->
    <link href="../assets/logo/default_logo.png" rel="icon">

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="container bg-light p-5 rounded adminLogin">
        <h1 class="text-center text-primary pb-5">Admin Login</h1>
        <form action="../serverSite/adminLoginSubmit.php" method="POST" id="adminloginForm">
            <div class="form-group">
                <label for="adminEmail">Email Address</label>
                <input type="email" class="form-control" id="adminlogin-email" name="adminEmail"
                    placeholder="Enter email">
                <span id="erroremail" style="color: red;"></span>
            </div><br>
            <div class="form-group">
                <label for="adminPassword">Password</label>
                <input type="password" class="form-control" id="adminlogin-password" name="adminPassword"
                    placeholder="Password">
                <span id="errorpass" style="color: red;"></span>
            </div><br>
            <div class="d-grid col-6 mx-auto">
                <button type="submit" class="btn btn-outline-primary text-uppercase btn-block"
                    style="font-weight: 600; transition: .3s;" onclick="return adminloginValidation()">Login</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- admin js file -->
    <script src="../js/adminlogin.js"></script>
</body>

</html>