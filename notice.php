<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Water Conference 2017</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  
  
      
       <center>
            <table width="750">
              <tr>
                <td>
                  <img src="images/gd.png">
                 </td>
                 
              <td>
                   <h2>Dhaka Water Conference  2017</h2>
				      <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"Water Sustains Development"<br><h3>
					    &nbsp&nbsp&nbsp&nbsp&nbsp29-30 July 2017 Dhaka,Bangladesh
                 </td>
                 


                 
                <td>
                  <img src="images/logo.jpg">
                 </td>
                
</tr>

</table>
</center>
<div class="container">
    <ul id="navPyra">
     <a href="index.html">Home</a></li>
      <li><a href="contact.html">Contact us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
        <li><a class="active" href="notice.php">Notice</a></li>
		<li><a href="admin/index.php">login</a></li>
    </ul>
  </div>
  <div id="banner">
  <img src="images/m.jpg" width="750" height="140">
  
  
  
  </div>
  <div id="side-menu">
    <div id="navcontainer">
      <h2>Resources</h2>
      <ul id="navlist">
	     <li><a href="background.html">Background</a></li> 
        <li><a href="participents.html">Participating Countries</a></li>
        <li><a href="schedule.html">Conference Schedule</a></li>
        <li><a href="concept.html">Concept of conference</a></li>
        <li><a href="country.html">Country papers</a> </li>
        <li><a href="venue.html">venue</a></li>
		<li><a href="list.php">Participants list </a> </li>
        <li><a href="query.php">query </a> </li>
		
      </ul>
    </div>
    <h2>More info</h2>
      <p><a href="http://www.pmo.gov.bd/">Prime Ministers office</a><br><a href="http://www.lgd.gov.bd/">Ministry of Local Goverment,Rural development and Cooperative</a><br><a href="http://www.mowr.gov.bd/">Ministry of water resource</a>.<br><a href="http://www.dphe.gov.bd/">Department of Public Health Engineering</a>. </p>
  </div>
  <div id="content">
    <h2>Welcome to <span style="font-weight:bold; color:#B07E13;">Dhaka Water Conference</span> 2017</h2>
    <blockquote>Latest notice<br/>
      of the conference</a>.</blockquote>
    
  <p>Latest news and views of the onference is given below.</p>
  
  
  
  <p>
		   <table width='500' align='center' border='5'>
		      <tr bgcolor='sky-blue'>
			  
			   <th>Date</th>
			    <th>notice</th>
				
			  </tr>
              <tr>
<?php
 
    include 'connection.php';
	$query = "select * from notice";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    
		$user_pass = $row[1];
		$user_email = $row[2];
		
		

?>
       
		 
		  <td><?php echo $user_pass; ?></td>
		  <td><?php  echo $user_email; ?></td>
	
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>

      
	
		</p>     
  </div>
  <div id="footer">
    DWC2017 @copy right reserved  </div>
</div>
</body>
</html>
