<?php
function suppliercon($EOd_orderID,$C_customerID,$EQ_equipmentID,$EOd_quantity,$EOd_totalPrice){
    
	include '../UserM/sEquipmentOrder.php';
}

?>

<?php

include '../../BusinessServiceLayer/UserM/sEquipmentOrder.php';



if(isset($_GET["id1"])){

 $id1=$_GET['id'];

suppliercon($_POST["EOd_orderID"],$_POST["C_customerID"],$_POST["EQ_equipmentID"],$_POST["EOd_quantity"],$_POST["EOd_totalPrice"]);
}




?>

