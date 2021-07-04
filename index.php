<!DOCTYPE html>
<html>
<head>
	<title>Login | Snap Kitchen</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productcss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="images/fav.png">
</head>
<body>
<nav>
            <a href="index.html" class="logo"><img src="./images/logo-new.png" alt="logo"></a>
            <!--Menu-->
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Account</a></li>
                <li><a href="#">Notices</a></li>
                <li><a href="#">Team</a></li>
            </ul>
        </nav>
<div class="container">
		<div class="img">
			<img src="images/login.png">
		</div>
		<div class="login-content">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="uname" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<input type="submit" class="btn" value="Login">
				<a href="signup.php">Please Click here to create an account.</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
