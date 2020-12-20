 <?php
include '../../libs/connection.php';

if ($conn->connect_error) {


    die("Connection failed: " . $conn->connect_error);


} 


class modeldetail
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

			$sql = "SELECT * FROM Equipment_Order INNER JOIN Event_Package ON Equipment_Order.C_customerID = Event_Package.C_customerID";

			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

			while( $row = mysqli_fetch_assoc($resultset) ) 
			{
				
			}
	return $resultset;
	}

}

?>
