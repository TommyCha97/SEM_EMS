<?php

function customercon($DayStart,$DayEnd,$TimeStart,$TimeEnd){
    
	include '../UserM/sBooking.php';
}
function eventcon($email,$psw){
    
	include '../UserM/sBooking.php';
}

?>

<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];


if($usertype=='customer'){

customercon($_POST["DayStart"],$_POST["DayEnd"],$_POST["TimeStart"],$_POST["TimeEnd"]);


}

if($usertype=='eventOrganizer'){

eventcon($_POST["email"],$_POST["psw"]);


}

}

?>