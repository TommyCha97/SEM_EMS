<?php
session_start();
if($_SESSION["id"] == ""){
echo '<script type="text/javascript">'; 
echo 'alert("Please Login First");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}

?>

<?php
include '../../BusinessServiceLayer/UserC/EquipmentController.php'; 

$p = new paymentdetail();
$resultset = $p -> viewdetail();

$S_supplierID = array();
$EQ_equipmentID = array();
$EQ_equipmentName = array();
$EQ_category = array();
$EQ_quantityAvailable = array();
$EQ_price = array();
$EQ_detail = array();
$EQ_status = array();

 foreach ($resultset as $row)
 {  
    $S_supplierID = $row['S_supplierID'];
    $EQ_equipmentID = $row['EQ_equipmentID'];
    $EQ_equipmentName = $row['EQ_equipmentName'];
    $EQ_category = $row['EQ_category'];
    $EQ_quantityAvailable = $row['EQ_quantityAvailable'];
    $EQ_price = $row['EQ_price'];
    $EQ_detail = $row['EQ_detail'];
    $EQ_status = $row['EQ_status'];
  
}
  $length = count($EQ_equipmentID);

?>


<!DOCTYPE html>
<html lang="en">

  <head>
<?php
   include 'supplierHeader.php';
?>
</head>

<style>
  

  .input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.msg {
  margin: 30px auto;
  padding: 10px;
  border-radius: 5px;
  color: #3c763d;
  background: #dff0d8;
  border: 1px solid #3c763d;
  width: 50%;
  text-align: center;
}
</style>
    <title>EMS Update Equipment</title>

     
      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
         
      </form>

<div>
</div> 
  <style>
  
body {
  font-size: 19px;
}
table{
  width: 50%;
  margin: 30px auto;
  border-collapse: collapse;
  text-align: left;
}
tr {
  border-bottom: 1px solid #cbcbcb;
}

th, td{
  border: none;
  height: 30px;
  padding: 2px;
}
tr:hover { 
  background: #F5F5F5;
}


.form1 {
  width: 45%;
  margin: 50px auto;
  text-align: left;
  padding: 20px;
  border: 1px solid #bbbbbb;
  border-radius: 5px;
}



  </style>
  


          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Equipment Update</li>
          </ol>

          <!-- Page Content -->
          <h1>Update Equipment</h1>

        <!--  -->
          <hr>

<body>


  <?php
  for($l = 0; $l < $length; $l++)
            {
   //echo"<form  action='../../BusinessServiceLayer/UserC/EquipmentController.php?id1=$id1' method='post'>";
    ?>

  <div class="form-group">
    <label for="eID">Supplier ID</label>
    <input type="text" class="form-control" name="sID"value="<?php echo ($S_supplierID[$l]);?>"  readonly>
  </div>

    <div class="form-group">
    <label for="eID">Equipment ID</label>
    <input type="text" class="form-control" name="eID"value="<?php echo ($EQ_equipmentID[$l]);?>"  readonly>
  </div>

  <div class="form-group">
    <label for="eName">Equipment Name</label>
    <input type="text" class="form-control" name="eName"value="<?php echo ($EQ_equipmentName[$l]);?>" >
  </div>
  <div class="form-group">
    <label for="eCategory">Equipment Category</label>
    <input type="text" class="form-control" name="eCategory" value="<?php echo ($EQ_category[$l]);?>">
  </div>
  <div class="form-group">
    <label for="eQuantityAvail">Quantity Available</label>
    <input type="number" class="form-control" name="eQuantityAvail" value="<?php echo ($EQ_quantityAvailable[$l]);?>">
  </div>
  <div class="form-group">
    <label for="ePrice">Price</label>
    <input type="float" class="form-control" value="<?php echo ($EQ_price[$l]);?>"  name="EQ_price" >
  </div>
  <div class="form-group">
    <label for="eDetail">Equipment Detail</label>
    <input type="text" class="form-control" name="eDetail" value="<?php echo ($EQ_detail[$l]);?>">
  </div>
  <div class="form-group">
    <label for="eStat">Status of Equipment</label>
    <input type="text" class="form-control" name="eStat" value="<?php echo ($EQ_status[$l]);?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
          }
          ?>
 
 <?php
         include 'supplierFooter.php';
         ?>
</html>