<?php

  session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
 include '../connection.php'; 
 
  $c=$_POST['number'];
  $query = "delete from users where name='$c'";
	
	if(mysql_query($query)){
		
		
		header("location:acn.html");
		
		
	}

?>
