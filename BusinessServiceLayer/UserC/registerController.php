<?php
function suppliercon($ssm,$companyName,$email,$psw,$supplierType,$phoneNo){
    
    include '../UserM/registerModel.php';
	
}

function customercon($C_name1,$C_email1,$C_telno1,$C_password1){
    
    include '../UserM/registerModel.php';
	
}
function eventcon($EO_companyName,$EO_emailAddress,$EO_password,$EO_telNo){
    
    include '../UserM/registerModel.php';
	
}


?>


<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){

suppliercon($_POST["ssmno"],$_POST["companyno"],$_POST["spemail"],$_POST["psw"],$_POST["supplierType"],$_POST["phoneno"]);


}
if($usertype=='customer'){

customercon($_POST["cusname"],$_POST["email"],$_POST["phoneno"],$_POST["psw"]);


}
if($usertype=='eventOrganizer'){

eventcon($_POST["cusname"],$_POST["email"],$_POST["psw"],$_POST["phoneno"]);


}
}

?>