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
    <title>EMS Add Equipment</title>

     
      
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
            <li class="breadcrumb-item active">Equipment </li>
          </ol>

          <!-- Page Content -->
          <h1>Add New Equipment</h1>

          <?php
                 include '../../BusinessServiceLayer/UserC/sEquipmentController.php';
              ?> 
          <hr>

<body>



   <?php
   echo"<form  action='../../BusinessServiceLayer/UserC/sEquipmentController.php?id1=$id1' method='post'>";
    ?>
   <!--  <div class="form-group">
    <label for="eID">Equipment ID</label>
    <input type="text" class="form-control" name="EQ_equipmentID">
  </div> -->

  <div class="form-group">
    <label for="eName">Equipment Name</label>
    <input type="text" class="form-control" name="EQ_equipmentName" >
  </div>
  <div class="form-group">
    <label for="eCategory">Equipment Category</label>
    <input type="text" class="form-control" name="EQ_category" >
  </div>
  
  <div class="form-group">
    <label for="ePrice">Price</label>
    <input type="float" class="form-control" name="EQ_price" >
  </div>
  <div class="form-group">
    <label for="eDetail">Equipment Detail</label>
    <input type="text" class="form-control" name="EQ_detail">
  </div>
  
<!--   <div class="form-group">
    <label for="eStat">Supplier ID</label>
    <input type="text" class="form-control" name="S_supplierID" >
  </div> -->
  
  <button type="submit" class="btn btn-primary" >Add New</button>


 <?php
         include 'supplierFooter.php';
         ?>
</html>