<?php
function suppliercon($EQ_equipmentName,$EQ_category,$EQ_quantityAvailable,$EQ_price,$EQ_detail,$EQ_status){
    
	include '../UserM/sEquipment.php';
}

?>

<?php

include '../../BusinessServiceLayer/UserM/sEquipment.php';



if(isset($_GET["id1"])){

 $id1=$_GET['id'];

suppliercon($_POST["EQ_equipmentName"],$_POST["EQ_category"],$_POST["EQ_quantityAvailable"],$_POST["EQ_price"],$_POST["EQ_detail"],$_POST["EQ_status"]);
}




?>

