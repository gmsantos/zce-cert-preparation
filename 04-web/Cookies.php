<?php

if (isset($_COOKIE['myCookie'])){
	
	var_dump("Cookie Number: " . $_COOKIE['myCookie']);
	
} else{
	
	//Sintax: bool setcookie ($name, $value = null, $expire = 0, $path = null, $domain = null, $secure = false, $httponly = false)
	setcookie('myCookie', rand(5, 15), time() + 10);
	
	// setrawcookie is the same as setcookie, except that value is not auto urlencoded
	
	echo "Naugthy boy! No cookies for you!";
}
