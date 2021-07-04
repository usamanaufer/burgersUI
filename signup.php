<!DOCTYPE html>
<html>
<head>
	<title>Register | Snap Kitchen</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productcss.css">
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
			<img src="images/register.png">
		</div>
		<div class="login-content">
     <form action="signup-check.php" method="post">
          <h2 class="title">Register Now</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">         
                        <h5>Name</h5>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      class="input"
                      value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      class="input">
          <?php }?>
          </div>
                 </div>
          

          
          <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      class="input"
                      value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname"
                      class="input"><br>
          <?php }?>
          </div>
                 </div>


                 <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
     	<input type="password" 
                 name="password"
                 class="input"><br>
                 </div>
            	</div>

                 <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
          <input type="password" 
                 name="re_password" 
                 class="input"><br>
                 </div>
            	</div>

     	<button type="submit" class="btn">Sign Up</button>
          <a href="index.php" class="ca">Login now ?</a>
     </form>
     </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>