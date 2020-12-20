 <?php
include '../../libs/connection.php';

if ($conn->connect_error) {


    die("Connection failed: " . $conn->connect_error);


} 


class modelreceipt
{

	public function pp()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ems";

 		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
			$sql = "SELECT * FROM Credit_Card INNER JOIN Equipment_Order ON Credit_Card.C_customerID = Equipment_Order.C_customerID INNER JOIN Event_Package on Credit_Card.C_customerID = Event_Package.C_customerID";

			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

			while( $row = mysqli_fetch_assoc($resultset) ) 
			{
				
			}
	return $resultset;
	}

}

?>
