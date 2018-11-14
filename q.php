<?php

  include 'connection.php';


	$a=$_POST['a'];
        $b=$_POST['C1'];
       

       if($a==''){
			 
			 echo "<script>alert('Please enter your email!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter your query!')</script>";
			 exit();
		 }


     

 if (!filter_var($a, FILTER_VALIDATE_EMAIL) === false){
 $query="insert into question 
			  (email,query) values ('$a','$b')";
			   if(mysql_query($query)){
			 
                          
			  echo "<script>window.open('qs.html','_self')</script>";
			   }
			 }

?>










