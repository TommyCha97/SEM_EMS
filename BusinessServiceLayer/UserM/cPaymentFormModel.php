	<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ems";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

	

    	if(isset($_POST["submit"]))
    	{
    		$CCNumber = $_POST['CCNumber'];
    		$ExpiryDate = $_POST['ExpiryDate'];
    		$CVV = $_POST['CVV'];
   			$Name = $_POST['Name'];

   			$query = "SELECT * FROM Credit_Card WHERE (CreditCard_Number='".$CCNumber."' AND Expiry_Date='".$ExpiryDate."' AND CVV='".$CVV."' AND C_name='".$Name."')";


   			$result = mysqli_query($conn, $query);
			$rowNo = mysqli_num_rows($result);

   			if($rowNo < 1)
			{
						echo '<script type="text/javascript">';
						echo 'alert ("Verification Failed. Please Try Again.")';
						echo '</script>';
						echo '<script> location.href = "http://localhost/SEM_EMS/ApplicationLayer/UserView/customerMenu.php" </script>';
			}
			else 
			{
						echo '<script type="text/javascript">';
						echo 'alert ("Verification Successful.")';
						echo '</script>';
						echo '<script> location.href = "http://localhost/SEM_EMS/ApplicationLayer/UserView/cPaymentReceipt.php" </script>';
			}
		}

?>