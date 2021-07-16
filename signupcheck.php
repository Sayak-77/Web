<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['e-mail']) && isset($_POST['edu']) && isset($_POST['phone'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email= validate($_POST['e-mail']);
	$cllg= validate($_POST['edu']);
	$mob= validate($_POST['phone']);

	$user_data = 'uname='. $uname. '&name='. $name. '&e-mail='. $email. '&edu='. $cllg. '&phone='. $mob;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required!&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required!&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required!&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=E_Mail is required!&$user_data");
	    exit();
	}
	else if(empty($cllg)){
        header("Location: signup.php?error=Education Field should be entered!&$user_data");
	    exit();
	}
	else if(empty($mob)){
        header("Location: signup.php?error=Mobile Number is required!&$user_data");
	    exit();
	}
	else if(empty($name)){
        header("Location: signup.php?error=Name is required!&$user_data");
	    exit();
	}
	else if(!preg_match("/^[a-zA-Z\s]+$/",$name)){
        header("Location: signup.php?error=Name should not contain numbers or Special Characters!&$user_data");
	    exit();
	}
	else if(strlen($_POST['phone'])<10){
        header("Location: signup.php?error=Mobile Number should be of 10 digits!&$user_data");
	    exit();
	}
	else if(!preg_match("/^[6-9]\d{9}$/",$_POST['phone'])){
        header("Location: signup.php?error=Invalid Mobile Number!&$user_data");
	    exit();
	}
	else if(!preg_match("/^[a-zA-Z\s]+$/",$cllg)){
        header("Location: signup.php?error=Invalid Educational Institution.Numbers or Special Characters should be avoided!&$user_data");
	    exit();
	}
	else if(strlen($_POST['password'])<=8){
	    header("Location: signup.php?error=Password should contain atleast 8 characters!&$user_data"); 
		exit();
	}
	else if(!preg_match("#[a-z]+#",$_POST['password'])){
		header("Location: signup.php?error=Password should contain atleast One Lowercase Letter!&$user_data"); 
		exit();
	}
	else if(!preg_match("#[A-Z]+#",$_POST['password'])){
		header("Location: signup.php?error=Password should contain atleast One Uppercase Letter!&$user_data"); 
		exit();
	}
	else if(!preg_match("#[0-9]+#",$_POST['password'])){
		header("Location: signup.php?error=Password should contain atleast One Number!&$user_data"); 
		exit();
	}
	else if(!preg_match('@[^\w]@',$_POST['password'])){
		header("Location: signup.php?error=Password should contain atleast One Special Character!&$user_data"); 
		exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match..!!&$user_data");
	    exit();
	}
	

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is takem.Try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, e_mail,dept,num) VALUES('$uname', '$pass', '$name', '$email','$cllg','$mob')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully!!");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}else{
	header("Location: signup.php");
	exit();
}