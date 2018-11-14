<?php

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
	    
		   
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
         
         <fieldset>
              <legend>For latest notice click</legend>
                          <a href="page1.php">First page</a><br>
			  <a href="notice.php">Notice panel</a><br>
			  <a href="participents.php">participents panel</a><br>
			  <a href="feedback.php">feedback panel</a><br>
                          <a href="query.php">query panel</a><br>
                         
                         
			  
           </fieldset>
        
            
               
		   <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			  
			   <th>email</th>
                           <th>query</th>
			 
				
			  </tr>
              <tr>
<?php
      include '../connection.php'; 
	
	$query = "select * from question";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $a=$row[0];
            $b=$row[1];
	

?>
          <td><?php echo $a; ?></td>
	  <td><?php echo $b; ?></td> 	 
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>
       
       
               


		</body>
        </html>		