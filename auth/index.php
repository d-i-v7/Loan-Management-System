<?php
// Calling The Connection File
include("../admin/config/conn.php");
session_start();

if(isset($_SESSION['activeUser']))
{
   header("location:../admin");
}
else
{

}
// Auto Login starting Here
if(isset($_COOKIE['email'])&& isset($_COOKIE['password']))
{
    $email=$_COOKIE['email'];
    $password=$_COOKIE['password'];
//    Automatic Login
$read = mysqli_query($conn,"SELECT * FROM users WHERE user_email = '$email'");
if($read && mysqli_num_rows($read)>0)
{
    $row=mysqli_fetch_assoc($read);
    $OldPassword=$row['user_password'];
    echo "Success";
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['activeUser']=true;
    setcookie("email",$email,time()+60*60*24*7,"/");
    setcookie("password",$OldPassword,time()+60*60*24*7,"/");
    header("location:../admin/");
}
else
{
  unset(  $_SESSION['user_id']);
   unset( $_SESSION['activeUser']);
    setcookie("email",$email,time()-60*60*24*7,"/");
    setcookie("password",$OldPassword,time()-60*60*24*7,"/");
}
}



// Sending THe Last Link Start Here
if(isset($_GET['last_link']))
{
    $last_link=urldecode($_GET['last_link']);
    // echo $last_link;
// echo json_encode( ['status' =>'success','last_link'=>"$last_link"]);
}
else
{
    $last_link="../admin";
// echo json_encode( ['status' =>'success','last_link'=>"../admin"]);
}
// Sending THe Last Link End Here


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../admin/assets/images/favicon.ico">

        <!-- App css -->
        <link href="../admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="../admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <a href="index.html" class="logo-dark">
                                <span><img src="../admin/assets/images/logo-dark.png" alt="" height="18"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="../admin/assets/images/logo.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>
                        <div id="alert" style="display: none;" class="alert"></div>
                        <!-- form -->
                        <form id="LoginForm">
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="email" name="email"  placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                        <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" id="remember" name="remember" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <input hidden name="last_link" id="last_link" value="<?php echo $last_link ;?>" type="text">
                            <div class="d-grid mb-0 text-center">
                                <button class="btn btn-primary" id="BtnLog" type="submit"><i class="mdi mdi-login"></i> Log In Now</button>
                            </div>
                            <!-- social-->
                            <!-- <div class="text-center mt-4">
                                <p class="text-muted font-16">Sign in with</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div> -->
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="register.php" class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">I love the color!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - Hyper Admin User
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->
<!-- Jq Cdn -->
 <script src="../admin/assets/plugins/jq/jquery-3.7.1.min.js"></script>
   <!-- Cutom Java Script Link -->
    <script src="js/loginR.js"></script>
 <!-- bundle -->
        <script src="../admin/assets/js/vendor.min.js"></script>
        <script src="../admin/assets/js/app.min.js"></script>

    </body>

</html>