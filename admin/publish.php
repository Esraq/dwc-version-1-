<?php


session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
 include '../connection.php'; 
 $a=$_POST['date'];
 $b=$_POST['notice'];


         
		
		 $a=$_POST['date'];
		 $b=$_POST['notice'];
                 $c=$_POST['number'];
                
                
		 
		 
		 if($a==''){
			 
			 echo "<script>alert('Please enter date!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter notice!')</script>";
			 exit();
		 }
                 if($c==''){
			 
			 echo "<script>alert('Please enter number!')</script>";
			 exit();
		 }

            
		 $query="insert into notice
			  (number,date,notice) values ('$c','$a','$b')";
			   if(mysql_query($query)){
			 
			  echo "<script>window.open('cn.html','_self')</script>";
			 
			 
	}
		
				
				
				
				











?>