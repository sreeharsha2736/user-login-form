<?php

session_start();

require 'users.php'; //calling users class

$p=0;
$password=0;
// Signing up user
if (isset($_POST['action']) && $_POST['action'] == "register") {
	$users = validateSignupForm();

	$objUser = new Users();
	$objUser->setFullName($users['fullName']);
	$objUser->setMobileNumber($users['mobileNumber']);
    $objUser->setEmail($users['email']);
    $p=$users['password'];
    $password=password_hash($users['password'], PASSWORD_BCRYPT);
	$objUser->setPassword($password);

	$userData = current($objUser->getUserByEmail());
   if(!empty($userData)){
    if($userData['email'] == $users['email']){
        echo 'Email is already registered.Try another!';
        exit;
    }
}
	if ($objUser->newUser()) {
		echo "success";
	}else{
		echo "Unable to create account";
	}

}
if (isset($_POST['action']) && $_POST['action'] == "login"){
	$users = validateSigninForm();

	$objUser = new Users();
    
    $objUser->setEmail($users['mail']);
	$objUser->setPassword($users['pass']);
    $userData = current($objUser->getUserByEmail()); 
    if(!empty($userData)){
    if($userData['email'] == $users['mail']){
    	if ($p==$userData['password']) {
            setcookie('mail', $users['mail']);
                setcookie('pass', base64_encode($users['pass']));
    			$_SESSION['id'] = session_id();
                $_SESSION['email'] =$userData['fullName'];
	            echo "success";
    		
    	}else{
            echo "Invalid Password.Please try again";
           
    		exit;
    	}
    }
}
    else{
    	echo 'Email is not registered yet!!';
        exit;
    }

}
// validating sign up form
function validateSignupForm(){
	$users['fullName'] = filter_input(INPUT_POST,'fullName',FILTER_SANITIZE_STRING);
	if(false == $users['fullName']){
		echo "Enter valid  Name";
		exit;
	}
	$users['mobileNumber'] = filter_input(INPUT_POST,'mobileNumber',FILTER_SANITIZE_STRING);
	if(false == $users['mobileNumber']){
		echo "Enter valid number";
		exit;
	}
	$users['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	if(false == $users['email']){
		echo "Enter valid Email";
		exit;
	}
	$users['password'] = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
	if(false == $users['password']){
		echo "Enter valid Passord";
		exit;
	}
	$users['confirmPassword'] = filter_input(INPUT_POST,'confirmPassword',FILTER_SANITIZE_STRING);
	if(false == $users['confirmPassword']){
		echo "Enter valid Confirm Password";
		exit;
	}
	if($users['password'] != $users['confirmPassword'] ){
		echo "Password and confirm password not match";
		exit;
	}
	return $users;
}


function validateSigninForm(){
    $users['mail'] = filter_input(INPUT_POST,'mail',FILTER_VALIDATE_EMAIL);
    if(false == $users['mail']){
        echo "Enter valid email";
        exit;
    }
    $users['pass'] = filter_input(INPUT_POST, 'pass',FILTER_SANITIZE_STRING);
    if(false == $users['pass']){
        echo "Enter valid password";
        exit;
    }
    return $users;
}

?>