<?php
function suppliercon($EQ_equipmentID,$EQ_equipmentName,$EQ_category,$EQ_quantityAvailable,$EQ_price,$EQ_detail,$EQ_status){
    
	include '../UserM/Equipment.php';
}

?> 

<?php

include '../../BusinessServiceLayer/UserM/Equipment.php';



if(isset($_GET["id1"])){

$id1=$_GET['id'];

suppliercon($_POST["eID"],$_POST["eName"],$_POST["eCategory"],$_POST["eQuantityAvail"],$_POST["ePrice"],$_POST["eDetail"],$_POST["eStat"]);
}




?> 
