<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["pack"])){
$userchose=$_GET['pack'];



if($userchose=='A'){

      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
   
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Package','99','A')";
      $result = $conn->query($sql);

      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}



else if($userchose=='B'){

      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
    
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Package','110','B')";
      $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}



else if($userchose=='C'){

      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
    
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Package','140','C')";
      $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}


else if($userchose=='D'){

      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
    
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Prom Night Package','80','A')";

      $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}


else if($userchose=='E'){
    
      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
    
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Prom Night Package','100','B')";
      $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}


else if($userchose=='F'){

      $sql1="SELECT count(*) as total from Customer";
      $result2 = $conn->query($sql1);
      $data=$result2->fetch_assoc();
      $max2=$data['total'];
      $max=$max2;
    
    
      $sql = "INSERT INTO Event_Package (C_customerID,EP_packageName,EP_packagePrice,EP_category)
             VALUES ('$max','2019 AGM Prom Night Package','125','C')";
      $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspsc");
} else {
    

 header("Location: ../../ApplicationLayer/UserView/cBookingForm.php?event=rgspfail");
}
   
}


}



$conn->close();



?>