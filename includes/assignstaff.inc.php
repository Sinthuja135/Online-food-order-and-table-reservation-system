<?php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
					 function valid()
{


 var x = confirm("Invalid delivery staffname");


 if(x) {


 	window.location.replace("../orders.php");

 }

}


				</script>









<?php
include 'dbh.inc.php';
//$val=$_POST["$row['order_no']"];

$val = $_POST['input'];
$_SESSION['cus_id']=$row['cus_id'];
//$id = $_POST['id'];

$sql = "UPDATE cart SET delivery_staff='$val' where cus_id='$id'";

include 'dbh.inc.php';
$sql3 = "SELECT * from staff where type='delivery'";
$result = $conn->query($sql3);

$exit = false;

if ($result->num_rows > 0) {

	$i = 0;
	while ($row = $result->fetch_assoc()) {

		$i++;

		if ($row['username'] == $val) {

			$exit = true;

		}

	}

	if ($exit) {

		if ($conn->query($sql)) {

			include 'dbh.inc.php';
			$sql = "UPDATE cart SET delivery_status='Accepted' where cus_id='$id'";

			if ($conn->query($sql)) {

				include 'dbh.inc.php';
				$sql2 = "SELECT mobile from customer where cus_id='$id'";

				$result = $conn->query($sql2);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						$rd = $row['mobile'];

						include "../NexmoMessage.php";
						/**
						 * To send a text message.
						 *
						 */
						// Step 1: Declare new NexmoMessage.

						$nexmo_sms = new NexmoMessage('9bede76a', 'NsanJTTbkc6FlmgN');
						// Step 2: Use sendText( $to, $from, $message ) method to send a message.
						$info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Order is conformed");
						// Step 3: Display an overview of the message
						echo $nexmo_sms->displayOverview($info);

					}

				}

			}
		}

	} else {

		echo '<script type="text/javascript"> valid(); </script>';

	}

}

?>









</body>
</html>