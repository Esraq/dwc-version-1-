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


      echo $a;
      echo "<br>";
      echo $b;

 if (!filter_var($a, FILTER_VALIDATE_EMAIL) === false){
 $query="insert into question 
			  (email,query) values ('$a','$b')";
			   if(mysql_query($query)){
			 
                           echo "inserted successfully";
			  ///echo "<script>window.open('welcome.php','_self')</script>";
			   }
			 }

?>










