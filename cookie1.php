<?php
$cookie_name="abcd";
$cookie_value="1234";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie is not set";
}
else
{
	echo "Cookie : ".$cookie_name." is set !";
	echo "<br>Value of the cookie is :".$cookie_value;
}
?>
