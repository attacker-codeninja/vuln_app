<?php
//XSS attack page
header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Feedback for end user
	//Below code is vulnerable to xss attack
	$html .= '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
}

?>
