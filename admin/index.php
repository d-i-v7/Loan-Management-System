<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Calling The File That have A Css Links -->
    <?php include("css_links.php")  ?>
    <title>LMS</title>
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
                    <?php include("dashboard.php") ?>
</div>
</div>
</div>
</div>
</div>

   <!-- Calling The File That have A Js Links -->
    <?php include("js_links.php")  ?>
</body>
</html>