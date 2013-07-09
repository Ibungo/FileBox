

<html>
	<head><title>MyUpload-Your upload page</title>
		<link rel="stylesheet" type="text/css" href="./css/mystyle.css" />
	</head>
	<body>
		<div class = "wrapper">
			<div class = "header-bar">
				<div class = "header content">
					<img class = "logo" src="./logo/myupload.png" >
						<span class = "logout-button">
						Need break ??
						<a class = "logout-button-red" href="./logout.php">
						Log out
						</a>
						</span>
				</div>
			</div>
			<div class="success1">
				<h2>Welcome to <i>MyUpload</i></h2>
                <p>You can upload your files for easy access. This is my first project and if it needs any changes please feel free to post it.</p>
                <form action="/upload.php" method="post" enctype="multipart/form-data">
                    Description of the file:<br>
                    <input type="text" name="file_description" size="40"><br>
                    
                    Select file:<br>
                    <input type="file" name="uploaded"/><br><br>
                    <input type="submit" name="submit" value="Upload"/>                
                </form>
			</div>
			<div class ="footer-bar">
				<div class="footer-content">
					<br>Created by <i>Thongam Deepak Singh</i>				
				</div>
			</div>
					
	</body>
</html>
