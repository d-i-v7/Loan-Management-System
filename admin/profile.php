<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Calling The File That have A Css Links -->
    <?php include("css_links.php")  ?>
    <title></title>
</head>
<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<div class="wrapper">
<!-- Calling The Side Bar Of The Admin Panel! -->
<?php include("sidebar.php");?>
 <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
        <div class="content">
       
        <!-- Calling The Headr Of Admin Panel! -->
         <?php include("header.php"); ?>
             <!-- Start Content-->
             <div class="container-fluid">
             
                
             <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-lg image-parent2">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-white userName"></h4>
                                                            <p class="font-13 text-white-50 userRole"></p>
    
                                                            <ul class="mb-0 list-inline text-light">
                                                                <li class="list-inline-item me-3">
                                                                    <h5 class="mb-1">$ 25,184</h5>
                                                                    <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <h5 class="mb-1">5482</h5>
                                                                    <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                                    <button type="button" class="btn btn-light">
                                                        <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                                    </button>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">About Me</h4>
                                        <p class="text-muted font-13">
                                        Hello, my name is <strong class="userName"></strong>. I am a <strong class="userRole"></strong> in the system, and you can reach me at <strong class="userEmail"></strong>. I enjoy exploring new technologies and contributing to innovative projects.                                        </p>

                                        <hr>

                                        <div class="text-start">
                                            <p class="text-muted"><strong >User Name :</strong> <span class="ms-2 userName"></span></p>

                                            <!-- <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">(+12) 123 1234 567</span></p> -->

                                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2 userEmail"></span></p>

                                            <p class="text-muted"><strong>Role :</strong> <span class="ms-2 userRole"></span></p>

                                            <!-- <p class="text-muted"><strong>Languages :</strong>
                                                <span class="ms-2"> English, German, Spanish </span>
                                            </p> -->
                                            <!-- <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Skype"><i class="mdi mdi-skype"></i></a>
                                            </p> -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                                <!-- Toll free number box-->
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <!-- End Toll free number box-->

                            

                            </div> <!-- end col-->

                            <div class="col-xl-8">

                                <!-- Chart-->
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Orders & Revenue</h4>
                                        <div dir="ltr">
                                            <div style="height: 260px;" class="chartjs-chart">
                                                <canvas id="high-performing-product"></canvas>
                                            </div>
                                        </div>        
                                    </div>
                                </div> -->
                                <!-- End Chart-->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-basket float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                                <h2 class="m-b-20">1,587</h2>
                                                <span class="badge bg-primary"> +11% </span> <span class="text-muted">From previous period</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-box float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                                <h2 class="m-b-20">$<span>46,782</span></h2>
                                                <span class="badge bg-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-jewel float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                                <h2 class="m-b-20">1,890</h2>
                                                <span class="badge bg-primary"> +89% </span> <span class="text-muted">Last year</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                                

                            </div>
                            <!-- end col -->

                        </div>

                </div>
                </div>
                </div>
                </div>
                </div>

                <!-- Calling The File That have A Js Links -->
                    <?php include("js_links.php")  ?>
                </body>
                </html>