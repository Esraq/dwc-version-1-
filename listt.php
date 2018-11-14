<html>
  <head>
    <title>Viewing all the users</title>
  </head>
     <body>
          <center><h1>All user information</h1></center>
		  <font size='6' color-'blue'>
		  
		   <table width='500' align='center' border='5'>
		      <tr bgcolor='sky-blue'>
			   <th>Name</th>
			   <th>Designation</th>
			    <th>country</th>
				
			  </tr>
              <tr>
<?php
 
    include 'connection.php';
	$query = "select * from users";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_name = $row[0];
		$user_pass = $row[1];
		$user_email = $row[2];
		
		

?>
       
		  <td><?php  echo $user_name; ?></td>
		  <td><?php echo $user_pass; ?></td>
		  <td><?php  echo $user_email; ?></td>
	
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>

      </body>
   </html>	  