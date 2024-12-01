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
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between items-center">
                <h3 class="text-primary ">Loans List</h3>
                <button class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Add New Loan</button>
                </div>
                <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
          <thead class="bg-primary text-white">
            <tr>
                <th>Loan Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>View More</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
           </thead>
           <tbody id="loansListTbody">
           <!-- The Data Are Bocoming From The app.js -->
           </tbody>
        </table>
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