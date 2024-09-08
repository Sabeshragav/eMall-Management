<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: dress_admin_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: dress_admin_login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dress login Manager</title>
	<link rel="stylesheet" type="text/css" href="/project_EMall/src/server.css">
</head>
<body>

<div class="header">
	<h2>Manager Login Successfull</h2>
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
    	<a href="dress_admin_login.php" class="logOut">logout</a>
		<a href="dress_admin_access.php" class="proceed">Proceed</a>
    <?php endif ?>
</div>

</body>
</html>