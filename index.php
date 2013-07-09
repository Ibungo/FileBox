
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
						<span class = "signup-button">
							New user ??
						<a class = "signup-button-red" href="signup.php">
							Sign Up
						</a>
						</span>
				</div>
			</div>
			

    	
	    	<div id="content"><h1>Welcome to my <i>MyUpload</i></h1>
	    		<form action="./login.php" method="POST">
	    			<fieldset>
	    				<legend>Sign in</legend>
	    				<label>Username</label>  <input type="text" name="uname" id="uname" size="30"><br>
	       				<br><label>Password</label>  <input type="password" name="pword" id="pword" size="30"><br>
			   			<div class="button">
						    <br><input type="reset" value="Reset">
    							<input type="submit" name="submit" value="Sign in">
    						<br>	
						</div>
    				</fieldset>
    				
    			</form>
    		</div>
    	
    		<div class ="footer-bar">
				<div class="footer-content">
					<br>Created by <i>Thongam Deepak Singh</i>				
				</div>
			</div>
		</div>
		   
	</body>
</html>

