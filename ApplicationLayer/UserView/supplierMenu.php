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

  <title>Supplier</title>

  <style >
      
      .height{
        height: 200px;
      }

  </style>
  <?php
   include 'supplierHeader.php';
  ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">supplier Dasboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Select Your Action</h1>
          <hr>

<div class="row">
            

<div class="col-xl-3 col-sm-6 mb-3 height">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Equipment Rental</div>
                </div>
              
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sEquipmentOrder.php?id=<?php echo"$_SESSION[id]";?>'" >View Equipment</button>
               <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sAddEquipment.php?id=<?php echo"$_SESSION[id]";?>'" >Add Equipment</button>
               <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sUpdateEquipment.php?id=<?php echo"$_SESSION[id]";?>'" >Update Equipment</button>

            </div>



<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Status</div>
                </div>
                
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sStatus.php?id=<?php echo"$_SESSION[id]";?>'" >Proceed status profile</button>

            </div>


          </div>


<?php
         include 'supplierFooter.php';
         ?>
</html>