<?php
function suppliercon($EQ_equipmentName,$EQ_category,$EQ_price,$EQ_detail){
    
	include '../UserM/sEquipment.php';
}

?>

<?php

include '../../BusinessServiceLayer/UserM/sEquipment.php';



if(isset($_GET["id1"])){

 $id1=$_GET['id'];

suppliercon($_POST["EQ_equipmentName"],$_POST["EQ_category"],$_POST["EQ_price"],$_POST["EQ_detail"]);
}




?>

