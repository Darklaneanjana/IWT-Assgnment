<?php
	session_start();
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/common.css?v=1" />
    <script src="js/homepage.js"></script>
    <title>
        Online App Store
    </title>
</head>
<body>

<header class="header">
	
	<div class="flex-container">

		<div  class="fwrap" style="display: inline-flexbox;">
		<div><a href="index.php"><img src="images/logo.png"  class="Hlogo"></a></div>
		<div><a href="index.php" style="text-decoration:none;color:#555;text-shadow: 2px 2px 2px #eee;">Online App Store</a></div>
		</div>

		<div  class="fwrap" style="display: inline-flexbox;">

			<div class="navbar">
				<a href="applist.php?type=games">Games</a>
				<a href="applist.php?type=apps">Apps</a>
				<a href="Category.php">Category</a>
				<a href="#" class="">Link</a></div>
			
			<div class="search">
				
				<form action="search.php" method="GET">
				<input type='hidden' name='type' value='search'>
				<input type="text" placeholder="Search.." name="search">
				</form>
			</div>
			<div class="user">
				<ul>
					
				<?php 
					if (isset($_SESSION["userID"])){
						echo "<button class='log'><a href='userprofile.php'>My Profile</a></button>";
						echo "<button class='log'><a href='inc/logout.php'>Log Out</a></button>";
					}
					else{
						echo "<button class='log'><a href='signin.php'>sign in</a></button>";
						echo "<button class='log'><a href='signup.php'>sign up</a></button>";
					}
				?>
				</ul>
			</div>
		</div>
	</div>
</header>