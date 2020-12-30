<?php
function suppliercon($EQ_equipmentID,$EQ_equipmentName,$EQ_category,$EQ_price,$EQ_detail,$S_supplierID){
    
	include '../UserM/Equipment.php';
}

?> 

<?php

include '../../BusinessServiceLayer/UserM/Equipment.php';



if(isset($_GET["id1"])){

$id1=$_GET['id'];

suppliercon($_POST["EQ_equipmentID"],$_POST["EQ_equipmentName"],$_POST["EQ_category"],$_POST["EQ_price"],$_POST["EQ_detail"],);
}


?> 

