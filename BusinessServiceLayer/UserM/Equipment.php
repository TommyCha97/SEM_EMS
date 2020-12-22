<?php
	session_start();

	$EQ_image = "";
	$EQ_equipmentName = "";
	$S_CompanyName = "";
	$EQ_detail = "";
	$EQ_quantityAvailable = "";
	$EQ_price = "";
	$EQ_equipmentID = 0;

	$db = mysqli_connect('localhost','root','','ems');

	if (isset($_POST['save'])) {
		if (isset($_POST['save'])) {
  		$EQ_image = $_FILES['EQimage']['EQname'];
  		$EQ_equipmentName = $_POST['EQname'];
  		$S_CompanyName = $_POST['CompanyName'];
  		$EQ_detail = $_POST['EQdetail'];
  		$EQ_quantityAvailable = $_POST['EQquantity'];
  		$EQ_price = $_POST['EQprice'];
  		$image_tmp_name = $_FILES['EQimage']['tmp_name'];

    		move_uploaded_file($image_tmp_name,"EQimage/$EQ_image");
    		$query = "INSERT INTO equipment (EQname,CompanyName,EQdetail,EQquantity,EQprice) VALUES ('$EQ_equipmentName','$S_CompanyName','$EQ_detail','$EQ_quantityAvailable','EQ_price')";
    		mysqli_query($db, $query);
    		header('location: sUpdateEquipment1.php');
}

$results = mysqli_query($db, "SELECT * FROM info");
?>
	
