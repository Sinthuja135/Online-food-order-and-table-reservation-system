<?php

 session_start();

	
	include ( "NexmoMessage.php" );
	
	
	
	

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b72bf1a8', '0d295EgvDLaYs0d6');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+94778679549', 'udskuhfkuds', 'nghgjgjgjjhgjhhjfj!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>