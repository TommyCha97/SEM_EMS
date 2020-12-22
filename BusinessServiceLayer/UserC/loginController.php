<?php
function suppliercon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function customercon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function eventcon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function admincon($email,$psw){
    
	include '../UserM/loginModel.php';
}
?>

<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){

suppliercon($_POST["email"],$_POST["psw"]);


}
if($usertype=='customer'){

customercon($_POST["email"],$_POST["psw"]);


}
if($usertype=='eventOrganizer'){

eventcon($_POST["email"],$_POST["psw"]);


}
if($usertype=='admin'){

admincon($_POST["email"],$_POST["psw"]);


}
}

?>