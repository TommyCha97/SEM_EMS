<?php
include '../../BusinessServiceLayer/UserM/cPaymentDetailModel.php';

class paymentdetail
{

	public function viewdetail()
	{

		$details = new modeldetail();

		$resultset = $details->pp();
		return $resultset;
	}

}
?>


<?php
include '../../BusinessServiceLayer/UserM/cPaymentReceiptModel.php';


class paymentreceipt
{

	public function viewreceipt()
	{

		$details = new modelreceipt();

		$resultset = $details->pp();
		return $resultset;
	}

}
?>