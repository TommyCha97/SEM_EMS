<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];




if($usertype=='customer'){
$sql1="SELECT count(*) as total from Customer";
$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total'];
$max=$max2;

$sql = "INSERT INTO Booking (C_customerID,DayStart,DayEnd,TimeStart,TimeEnd)
             VALUES ('$max','$DayStart','$DayEnd','$TimeStart','$TimeEnd')";

 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/customerMenu.php?event=rgcssc");
} else {
    
 header("Location: ../../ApplicationLayer/UserView/customerMenu.php?event=rgcsfl");
 
}
   
}

else if($usertype=='eventOrganizer'){
  
$sql1="SELECT count(*) as total from Event_Organizer";
$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total'];
$max=$max2;

$sql = "INSERT INTO Event_Organizer (EO_eventOrgID,EO_companyName,EO_emailAddress,EO_password,EO_telNo)
             VALUES ('$max','$EO_companyName','$EO_emailAddress','$EO_password','$EO_telNo')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/index.php?event=rgevsc");
} else {
    
  header("Location: ../../ApplicationLayer/UserView/index.php?event=rgevfl");
 
}
   
}


}



$conn->close();



?>