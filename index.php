<?php
	if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
		// session isn't started
		session_start();
	}
	//session_start();
	//var_dump($_SESSION["role"]);die;
	if ($_SESSION["role"] != 1) {
		header("Location: orders.php");
		die();
	}

    
	require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
	require_once(LIBRARY_PATH . "/templateFunctions.php");
    
	/* 
Now you can handle all your php logic outside of the template 
file which makes for very clean code! 
*/
	
	$setInIndexDotPhp = "";
	
	// Must pass in variables (as an array) to use in template 
	$variables = array(
		'setInIndexDotPhp' => $setInIndexDotPhp
	);
	
	renderLayoutWithContentFile("page_home.php", $variables);
?>
