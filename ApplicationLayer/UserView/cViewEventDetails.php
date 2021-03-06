<?php
session_start();
if($_SESSION["id"] == ""){
echo '<script type="text/javascript">'; 
echo 'alert("Please Login First");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>EMS Customer Menu</title>

    <!-- Bootstrap core CSS-->
    <link href="../../libs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../libs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../libs/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../libs/css/sb-admin.css" rel="stylesheet">

    <style>
      .btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .20px;
    font-weight: bold;
    }

    .btn-primary:hover {
    background-color: #2D9CDB;
    }
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="customerMenu.php?id=C_1">Event Management System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
     
      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
         
      </form>

<div>
</div>  
     <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
      <?php
if(isset($_GET["id"])){

$id1=$_GET['id'];



}


      ?>
         
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approvedModal">Cart</a>
    
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="customerMenu.php?id=C_1">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- Sidebar for supplier-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shuttle-van"></i>
            <span>Supplier</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()" >Login</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()" >Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Equipment Pages:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment List</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Add Equipment</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Update Equipment</a>
            <a class="dropdown-item " href="#" onclick="alertLogin()">Delete Equipment</a>
               <div class="dropdown-divider"></div>
               <!--Other Relates Page -->
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Status</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Rating</a>
          </div>
        </li>
          <!-- Sidebar for Customer-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-bag"></i>
            <span>Customer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="cViewEventPackage.php" >Event Package</a>
            <a class="dropdown-item" href="#" >Equipment Rental</a>
               <!--Payment Page -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header" >Payment pages:</h6>
              <a class="dropdown-item" href="#" >Pay</a>

               <!--Other Relates Page for customer -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <?php
              echo"<a class='dropdown-item' href='cRating.php?id=".$id1." '>Rating</a>";

              ?>
              <a class="dropdown-item" href="cMessageSupplier.php" >Question & Answer</a>
          </div>
        </li>

           <!-- Sidebar for Event Organizer-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-alt"></i>
            <span>Event Organizer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()">Login</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Event Package</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment Rental</a>
               <!--Payment Page -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Payment pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Pay</a>

               <!--Other Relates Page for event organizer -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Rating</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Question & Answer</a>
          </div>
        </li>


           <!-- Sidebar for administator-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-cog"></i>
            <span>Admin</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Logout Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()">Log in</a>

               <!--Approve membership Page -->
           <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Approve pages:</h6>
           
              <a class="dropdown-item" href="#" onclick="alertLogin()">Approve Member</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="customerMenu.php?id=C_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Customer & Event Organizer Dashboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Select Your Event Package</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:200px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" style="color: black"><b>Event Package</b></h1>
    <p><h1 class="w3-xxxlarge w3-text-red"><b>2019 AGM Package</b></h1></p>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
          <img src="../../libs/AGM_Connexion.jpg" style="width:100%" onclick="onClick(this)" alt="2019 AGM Package" align="center">
          <form action="../../BusinessServiceLayer/UserC/sEventPackageController.php?pack=A" method="post">
            <table align="margin-left" cellpadding="10px">
            <tr style="margin-left: 0px">
              <td><h3 class="package-A">Package A</h3></td>
            </tr>
            <tr>
              <td>
                <p style="background-color: lightblue;">
                  RM99 per person<br>Three Compartment<br>Packed Lunch</p>
              </td>
                <td>
                <input class="btn btn-primary" type="submit" value="Choose package" name="Package_A">
              </td>
            </tr>
          </table>
          </form>


          <form action="../../BusinessServiceLayer/UserC/sEventPackageController.php?pack=B" method="post">
            <table align="margin-left" cellpadding="10px">
            <tr style="margin-left:0px :10px">
              <td><h3 class="package-B">Package B</h3></td>
            </tr>
            <tr>
              
              <td>
                <p style="background-color: lightblue;">
                  RM110 per person<br>Three Compartment<br>Packed Lunch</p>
              </td>

               <td>
                <input class="btn btn-primary" type="submit" value="Choose package" name="Package_B">
              </td>
              
            </tr>
          
          </table>
          </form>



          <form action="../../BusinessServiceLayer/UserC/sEventPackageController.php?pack=C" method="post">
            <table align="margin-left" cellpadding="10px">
            <tr>
              <td><h3 class="package-C">Package C</h3></td>
            </tr>
            <tr>
              <td>
                <p style="background-color: lightblue;">
                  RM140 per person<br>Buffet Dine-in Lunch</p>
              </td>
              <td>
                <input class="btn btn-primary" type="submit" value="Choose package" name="Package_C">
              </td>
            </tr>          
          </table>
          </form>


  

<br>

           <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SDW GROUP 4 EVENT MANAGEMENT SYSTEM 2018/2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
           <!-- Bootstrap core JavaScript-->
    <script src="../../libs/vendor/jquery/jquery.min.js"></script>
    <script src="../../libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../libs/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../libs/js/sb-admin.min.js"></script>
             </body>
             <?php

if(isset($_GET["event"])){
  $evt=$_GET['event'];

  if($evt=='rtsc'){
$message = "Rating Successful";
echo "<script type='text/javascript'>alert('$message');</script>";

 

                 }
  else if($evt=='rtfl'){


$message = "Rating fail, please try again";
echo "<script type='text/javascript'>alert('$message');</script>";


  }

}


             ?>
<script type="text/javascript">
  
   function alertLogin() {
  alert("Please Log out your  account First");
}
</script>
</html>