<?php
 include '../connection.php'; 
session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
?>



<html>
  <head>
    <title>welcome.php</title>
  </head>
      <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	   <font color='red' size='5'>
	   <?php echo $_SESSION['email']; ?>
	   </font>
	    <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
                           <th>Number</th> 
			   <th>Date</th>
			   <th>Notice</th>

			    
	
			
			  </tr>
              <tr>
	   <?php

	
	$query = "select * from notice";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $u= $row[0];
	    $n= $row[1];
             $m= $row[2];
	     
	
		
		

?>
          <td><?php echo $u; ?></td>
		  <td><?php  echo $n; ?></td>
                   <td><?php  echo $m; ?></td>
		  
		   

              </tr>		

	<?php } ?>	  
		   
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
         <form action="publish.php" method="post">  
         <fieldset>
              <legend>For latest notice click</legend>
			 Enter number:
             <input type="text" name="number"> 
             Enter date:
             <input type="text" name="date">
             Enter notice:
             <input type="text" name="notice">
			  <input type="submit"><br>
		<a href="page1.php">First page</a><br>
	    <a href="notice.php">Notice panel</a><br>
	   <a href="participents.php">participents panel</a><br>
	   <a href="feedback.php">feedback panel</a><br>
       <a href="query.php">query panel</a><br>
	   
	   
			  
           </fieldset>
        
            
        </form>
		
		 <form action="delete.php" method="post">  
		
		 <fieldset>
              <legend>For delete select date</legend>
             Enter number:
             <input type="text" name="number">
           
			  <input type="submit">
			  
           </fieldset>
        
            
        </form>
       
       
               


		</body>
        </html>		