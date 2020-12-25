<?php
include '../../BusinessServiceLayer/UserM/Equipment.php';

class paymentdetail
{

	public function viewdetail()
	{

		$details = new modelupdate();

		$resultset = $details->pp();
		return $resultset;
	}

}
?>