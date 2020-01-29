<?php  
session_start();
if (@$_SESSION['user']) {
    header('location:admin/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="./assets_admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="./assets_admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./assets_admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./assets_admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./assets_admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

   

    <!-- Main CSS-->
    <link href="./assets_admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="background: linear-gradient(#2196f3, blue)">
                        <div class="login-logo">
                            <a href="#">
                                <img src="./assets/images/logo2.png" width='30%' alt="SDN 2 Setiamulya">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="check_login.php" method="post">
                                <?php  
                                if (@$_GET['error'] != null): 
                                ?>
                                <div class="alert alert-danger">
                                  <strong>Gagal!</strong> <?php echo $_GET['error']?>.
                                </div>
                                <?php endif ?>
                                <div class="form-group">
                                <div class="input-group">
                                 <div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="username" class="form-control"  name="username" id="username" placeholder="Username">
										</div>
									</div>
                                </div>
                                <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>
								</div>
                                
								<div class="form-group">
									<button class="btn btn-success btn-block" type="submit">sign in <i class="fa fa-unlock"></i></button>
								</div>
                             </form>          
						</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="./assets_admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="./assets_admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="./assets_admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
   
    </script>

    <!-- Main JS-->
    <!--<script src="js/main.js"></script> -->

</body>

</html>
<!-- end document-->