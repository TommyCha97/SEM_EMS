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

  <title>Supplier Status</title>

  <?php
   include 'supplierHeader.php';
  ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Supplier Status</li>
          </ol>

          <!-- Page Content -->
          <h1>Update your status</h1>
          <hr>
           <?php
                 include '../../BusinessServiceLayer/UserC/sStatusController.php';
              ?>   
<?php
   echo"<form  action='../../BusinessServiceLayer/UserC/sStatusController.php?id1=$id1' method='post'>";
    ?>
    <div class="form-group">
    <label for="ssmNo">SSM No</label>
    <input type="text" class="form-control" name="ssmNo"value="<?php echo $ssm;?>" >
  </div>

  <div class="form-group">
    <label for="ssmNo">Company Name</label>
    <input type="text" class="form-control" name="companyName"value="<?php echo $company;?>" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="ssmNo">Phone No</label>
    <input type="text" class="form-control" name="phoneno" value="<?php echo $phone;?>" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email;?>"aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="psw">Password</label>
    <input type="password" class="form-control" value="<?php echo $psw;?>"  name="psw" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



<?php
         include 'supplierFooter.php';
         ?>
</html>