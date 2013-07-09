
<html>
	<head>
		<title>MyUpload</title>
		<link rel="stylesheet" type="text/css" href="./css/mystyle.css" />
	</head>
	<body>
    	
    	<div class = "wrapper">
			<div class = "header-bar">
				<div class = "header content">
					<img class = "logo" src="./logo/myupload.png" >
						
				</div>
			</div>
			

    			
			<?php
			    $username = $_POST['uname'];
			    $firstname = $_POST['lname'];
			    $lastname = $_POST['lname'];
			    $password = $_POST['pword'];
			    $email = $_POST['email'];
		
			    mysql_connect("localhost","root","284878") or die("Cannot connect");
			    mysql_select_db("trackstardb") or die("Cannot connect");
			    mysql_query("INSERT into tbl_user (username, firstname, lastname, email, password) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')");
    
			?>
			
			<div class = "success1">
				<h2>Welcome to <i>MyUpload</i></h2>
				<p>Bravo!!! Your information has been successfully entered into our database. You can begin exploring <i>myUpload</i> by going back to the main page and entering your details.</p>
				
					<a class="signupdb" href="./index.php">Click here to log in</a>    	
				
			</div>
    
    		<div class ="footer-bar">
				<div class="footer-content">
					<br>Created by <i>Thongam Deepak Singh</i>				
				</div>
			</div>
		</div>
		   
	</body>
</html>



