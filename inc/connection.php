<?php

$connection = mysqli_connect('localhost:3306','root','123456','oas');

if(mysqli_connect_errno()){
	
	die('database connection faild'. mysqi_connect_error());
	
}
else{
	echo "connection successfull";
}
		

?>