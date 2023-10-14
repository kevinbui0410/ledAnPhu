<?php
    session_start();
    session_destroy();
	require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
	require_once(LIBRARY_PATH . "/templateFunctions.php");
    
	/* 
Now you can handle all your php logic outside of the template 
file which makes for very clean code! 
*/
	
	$setInIndexDotPhp = "Page Login";
    $error = "";
	
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        // Check if username is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter password.";
        } else{
            $password = trim($_POST["password"]);
        }

        $password = md5($password);

        $row = DB::queryFirstRow("SELECT username,role,ho_ten,dia_chi,dien_thoai FROM nhan_vien WHERE username=%s AND password=%s  LIMIT 1", $username, $password);

        if ($row !== NULL)
        {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["ho_ten"] = $row["ho_ten"];
            $_SESSION["dia_chi"] = $row["dia_chi"];
            $_SESSION["dien_thoai"] = $row["dien_thoai"];
            $_SESSION["role"] = $row["role"];
            
            header("location: index.php");
            exit;
        }

        
        $error = "Login Error";
    }
	
    // Must pass in variables (as an array) to use in template 
	$variables = array(
		'setInIndexDotPhp' => $setInIndexDotPhp,
        'error' => $error
	);

	renderLayoutWithContentFile("login.php", $variables);
?>
