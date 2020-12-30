<?php
include '../../BusinessServiceLayer/UserC/EquipmentController.php'; 

$p = new paymentdetail();
$resultset = $p -> viewdetail();

$S_supplierID = array();
$EQ_equipmentID = array();
$EQ_equipmentName = array();
$EQ_category = array();
$EQ_price = array();
$EQ_detail = array();

 foreach ($resultset as $row)
 {  
    $S_supplierID = $row['S_supplierID'];
    $EQ_equipmentID = $row['EQ_equipmentID'];
    $EQ_equipmentName = $row['EQ_equipmentName'];
    $EQ_category = $row['EQ_category'];
    $EQ_price = $row['EQ_price'];
    $EQ_detail = $row['EQ_detail'];

  
}
  $length = count($S_supplierID);

?>



<!-- <?php
include '../../BusinessServiceLayer/UserM/Equipment.php';

class paymentdetail
{

	public function viewdetail()
	{

		$details = new modelupdate();

		$resultset = $details->pp();
		return $resultset;
	}

}
?> 

class modelupdate
{

    public function pp()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ems";

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

           // $sql = " SELECT EQ_equipmentID,EQ_equipmentName,EQ_category,EQ_quantityAvailable,EQ_price,EQ_detail,EQ_status FROM Equipment WHERE S_supplierID='$id1' ";
        $sql =  "SELECT * FROM equipment INNER JOIN supplier ON equipment.S_supplierID = supplier.S_supplierID";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

            while( $row = mysqli_fetch_assoc($resultset) ) 
            {
                
            }
    return $resultset;
    }

}


<?php 

while ($row = mysql_fetch_array(result)) 
{
  echo "<tr><form  action='../../BusinessServiceLayer/UserC/EquipmentController.php?id1=$id1' method='post'>";
  echo "<td><input type=text name=EQ_equipmentName value='".$row['EQ_equipmentName']."' </td>";
  echo "<td><input type=text name=EQ_category value='".$row['EQ_category']."' </td>";
  echo "<td><input type=text name=EQ_price value='".$row['EQ_price']."' </td>";
  echo "<td><input type=text name=EQ_detail value='".$row['EQ_detail']."' </td>";
  echo "<input type=hidden name EQ_equipmentID value'".$row['EQ_equipmentID']."'>";
  echo "<td><input type=submit>";

}

?>


<?php
if(isset($_GET["event"])){
  $evt=$_GET['event'];

  if($evt=='suc'){
$message = "Update Successful";
echo "<script type='text/javascript'>alert('$message');</script>";

 

                 }
  else if($evt=='fail'){


$message = "Update fail, please try again";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
}
?>


