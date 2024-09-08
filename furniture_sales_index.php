<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: furniture_sales_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: furniture_sales_login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Furniture login Salesperson</title>
	<link rel="stylesheet" type="text/css" href="/project_EMall/src/server.css">
</head>
<body>

<div class="header">
	<h2>Salesperson Login Successfull</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> !!</p><br>
    	<a href="furniture_sales_login.php" class="logOut">logout</a>
		<a href="furniture_sales_access.html" class="proceed">Proceed</a>
    <?php endif ?>
</div>

</body>
</html>