<html>
	<head><title>MyUpload-Your upload page</title>
		<link rel="stylesheet" type="text/css" href="./css/mystyle.css" />
	</head>
	<body>
		<div class = "wrapper">
			<div class = "header-bar">
				<div class = "header content">
					<img class = "logo" src="./logo/myupload.png" >
				</div>
			</div>
			<div class="success1">
				<h2>Welcome to <i>MyUpload</i></h2>
                <p>Please enter your details and go ahead</p>
                <form action="./signupdb.php" method="POST">
                    <label>Username:</label><input type="text" name="uname" size="30"/><br>
                    <label>Firstname:</label><input type="text" name="fname" size="30"/><br>                
                    <label>Lastname:</label><input type="text" name="lname" size="30"/><br>
                    <label>Email:</label><input type="text" name="email" size="30"/><br>
                    <label>Password:</label><input type="password" name="pword" size="30"/><br>
                    <label>Re-enter password:</label><input type="password" name="rpword" size="30"/><br>
                    <div class="button">
                        <input type="submit" name="submit" value="Submit"/>
                    </div>
                </form>
			</div>
			<div class ="footer-bar">
				<div class="footer-content">
					<br>Created by <i>Thongam Deepak Singh</i>				
				</div>
			</div>
					
	</body>
</html>
