<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){
	
$sql = "SELECT S_supplierID FROM Supplier WHERE S_emailAddress ='$email' AND  MD5(S_password )= MD5('$psw') AND S_status='approved'";

 $result = $conn->query($sql);

if ($result->num_rows ==1) {
    while($row = $result->fetch_assoc()) {

$id1 = $row["S_supplierID"];

}

    header("Location: ../../ApplicationLayer/UserView/supplierMenu.php?id=$id1");
} else {
    header("Location: ../../ApplicationLayer/UserView/index.php?event=lgfail");
}

   
}

else if($usertype=='customer'){
  $sql = "SELECT C_customerID FROM Customer WHERE C_email ='$email' AND  MD5(C_password )= MD5('$psw')";

 $result = $conn->query($sql);

if ($result->num_rows ==1) {
    while($row = $result->fetch_assoc()) {

$id1 = $row["C_customerID"];

}

    header("Location: ../../ApplicationLayer/UserView/customerMenu.php?id=$id1");
} else {
    header("Location: ../../ApplicationLayer/UserView/index.php?event=lgfail");
}
   
}

else if($usertype=='eventOrganizer'){
	$sql = "SELECT EO_eventOrgID FROM Event_Organizer WHERE EO_emailAddress ='$email' AND  MD5(EO_password )= MD5('$psw')";

 $result = $conn->query($sql);

if ($result->num_rows ==1) {
    while($row = $result->fetch_assoc()) {

$id1 = $row["EO_eventOrgID"];

}

    header("Location: ../../ApplicationLayer/UserView/customerMenu.php?id=$id1");
} else {
    header("Location: ../../ApplicationLayer/UserView/index.php?event=lgfail");
} 
}

else if($usertype=='admin'){
  $sql = "SELECT A_adminID FROM Admin WHERE A_adminEmail ='$email' AND  MD5(A_password )= MD5('$psw')";

 $result = $conn->query($sql);

if ($result->num_rows ==1) {
    while($row = $result->fetch_assoc()) {

$id1 = $row["A_adminID"];

}

    header("Location: ../../ApplicationLayer/UserView/adminMenu.php?id=$id1");
} else {
    header("Location: ../../ApplicationLayer/UserView/index.php?event=lgfail");
} 
}

}



$conn->close();



?>