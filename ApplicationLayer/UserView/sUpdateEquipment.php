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
  
input [type=text]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  box-sizing: border-box;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
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
body {
  font-size: 19px;
}
table{
  width: 15%;
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

</style>
    <title>EMS Update Equipment</title>     
      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
         
      </form>

<div>
</div> 

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Equipment Update</li>
          </ol>

          <!-- Page Content -->
          <h1>Update Equipment</h1>

        <?php
                 include '../../BusinessServiceLayer/UserC/EquipmentController.php';
              ?>
          <hr>

<body>


    <?php
      echo"<form  action='../../BusinessServiceLayer/UserC/EquipmentController.php?id1=$id1' method='post'>";
    ?>

  <table>
        <tr>
          
          <th>Equipment ID</th>
          <th>Equipment Name</th>
          <th>Equipment Category</th>
          <th>Equipment Price</th>
          <th>Equipment Detail</th>
          <th>Supplier ID</th>
          <th>Update</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          
          <td><input type="hidden" name="EQ_equipmentID"value=<?php echo $row['EQ_equipmentID']; ?> ></td>
          <td><input type="text" name="EQ_equipmentName"value=<?php echo $row['EQ_equipmentName']; ?> ></td>
          <td><input type="text" name="EQ_category"value=<?php echo $row['EQ_category']; ?> ></td>
          <td><input type="text" name="EQ_price"value=<?php echo $row['EQ_price']; ?> ></td>
          <td><input type="text" name="EQ_detail"value=<?php echo $row['EQ_detail']; ?> ></td>
          <td><input type="text" name="S_supplierID"value=<?php echo $row['S_supplierID']; ?> ></td>
          <td><input type="submit" name="Update"></td>
        </tr>
        <?php endwhile; ?>
      </table>

</body>

 

 <footer>
  <?php
         include 'supplierFooter.php';
         ?>
           
         </footer>
 
</html>