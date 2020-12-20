<?php

function customercon($newarray,$price){
    
    include '../UserM/sEquipment.php';
}
function eventcon($email,$psw){
    
	include '../UserM/sEquipment.php';
}

?>



<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];


if($usertype=='customer'){


$array = $_POST["Selection"];
$newarray = implode(", ", $array);


$c = count($array);
$price = 0.0;


for($i=0; $i<$c; $i++)
{
	if($array[$i] == "SonySpeaker"){

		$price = $price + 19.99;

	}
	if($array[$i] == "LogitechMultimediaSpeaker"){

		$price = $price + 24.99;

	}
	if($array[$i] == "InstantCanopy"){

		$price = $price + 72.99;

	}
	if($array[$i] == "CaravanCanopy"){

		$price = $price + 69.99;

	}
}


customercon($newarray,$price);

}


if($usertype=='eventOrganizer'){

eventcon($_POST["email"],$_POST["psw"]);


}

}

?>