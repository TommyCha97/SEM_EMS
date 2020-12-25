<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 
if(isset($_GET["id"])){
$id1=$_GET['id'];

// For extra protection these are the columns of which the user can sort by (in your database table).
$columns = array('EOd_orderID','C_customerID','EQ_equipmentID' , 'EOd_quantity' , 'EOd_totalPrice');

// Only get the column if it exists in the above columns array, if it doesn't exist the database table will be sorted by the first item in the columns array.
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];

// Get the sort order for the column, ascending or descending, default is ascending.
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Get the result...
if ($result = $conn->query('SELECT * FROM equipment_order ORDER BY ' .  $column . ' ' . $sort_order)) {
  // Some variables we need for the table.
  $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
  $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
  $add_class = ' class="highlight"';
  
    
}

}




?>