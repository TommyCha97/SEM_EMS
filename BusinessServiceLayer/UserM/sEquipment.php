<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


}



if(isset($_GET["id1"])){
// $id1=$_GET['id1']

  $new="SELECT count(*) as total from equipment";
  $result2 = $conn->query($new);
  $data=$result2->fetch_assoc();
  $max2=$data['total']+1;
  $max="E_".$max2;

  $new1="SELECT count(*) as total from equipment";
  $result3 = $conn->query($new1);
  $data2=$result3->fetch_assoc();
  $max3=$data2['total'];
  $max4=$max3;

$sql = "INSERT INTO equipment (EQ_equipmentID, EQ_equipmentName, EQ_category, EQ_quantityAvailable, EQ_price, EQ_detail, EQ_status, S_supplierID)
             VALUES ('$max','$EQ_equipmentName', '$EQ_category', '$EQ_quantityAvailable', '$EQ_price', '$EQ_detail', '$EQ_status', '$max4')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) == TRUE ) {
 
  header("Location: ../../ApplicationLayer/UserView/sAddEquipment.php?id=$id1&event=suc");
  echo "sql error " . $conn->error;
    } else {
    echo "Error adding record: " . $conn->error;
}
   
}

// if(isset($_GET["id1"])){
// $id1=$_GET['id1'];

// ;
// $sql = "INSERT INTO Equipment (  EQ_equipmentName, EQ_category, EQ_quantityAvailable, EQ_price, EQ_detail, EQ_status, S_supplierID) 
//           VALUES (  $_POST[EQ_equipmentName]', '$_POST[EQ_category]', '$_POST[EQ_quantityAvailable]', '$_POST[EQ_price]', '$_POST[EQ_detail]', '$_POST[EQ_status]', '$_POST[S_supplierID]')";

// if ($conn->query($sql) == TRUE) {
  

//    header("Location: ../../ApplicationLayer/UserView/sAddEquipment.php?id=$id1&event=suc");
//     } else {
//     echo "Error inserting record: " . $conn->error;
    
// }

// }




?>