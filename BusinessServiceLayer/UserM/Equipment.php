<?php
include '../../libs/connection.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);


} 
// if(isset($_GET["id"])){
// $id1=$_GET['id'];
// $sql = " SELECT EQ_equipmentID,EQ_equipmentName,EQ_category,EQ_quantityAvailable,EQ_price,EQ_detail,EQ_status FROM Equipment WHERE S_supplierID='$id1'";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row


//    while($row = $result->fetch_assoc()) {
      
//     $EQ_equipmentID = $row['EQ_equipmentID'];
//     $EQ_equipmentName = $row['EQ_equipmentName'];
//     $EQ_category = $row['EQ_category'];
//     $EQ_quantityAvailable = $row['EQ_quantityAvailable'];
//     $EQ_price = $row['EQ_price'];
//     $EQ_detail = $row['EQ_detail'];
//   $EQ_status = $row['EQ_status'];;

//     }


// }
// }

if(isset($_GET["id1"])){
$id1=$_GET['id1'];
$sql = "UPDATE Equipment SET EQ_equipmentID='$EQ_equipmentID',EQ_equipmentName='$EQ_equipmentName',EQ_category='$EQ_category',EQ_quantityAvailable='$EQ_quantityAvailable',EQ_price='$EQ_price',EQ_detail='$EQ_detail',EQ_status='$EQ_status' WHERE S_supplierID='$id1'";
if ($conn->query($sql) == TRUE) {

   header("Location: ../../ApplicationLayer/UserView/sUpdateEquipment.php?id=$id1&event=suc");
    } else {
    echo "Error updating record: " . $conn->error;
    
}

}


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
        $sql =  "SELECT * FROM Equipment";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

            while( $row = mysqli_fetch_assoc($resultset) ) 
            {
                
            }
    return $resultset;
    }

}


?>
