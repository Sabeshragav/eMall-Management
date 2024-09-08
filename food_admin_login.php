<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>FoodCourt login Manager</title>
  <link rel="stylesheet" type="text/css" href="/project_EMall/src/server.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<!-- admin login section -->
	<div class="mt-32">
  <div class="header">
  	<h2>Manager Login [FOODCOURT]</h2>
  </div>
	 
  <form method="post" action="food_admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="admin_username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="admin_password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn bg-blue-500 font-bold p-px-5 text-m border-2 border-solid rounded-xl" name="food_login_admin">Login</button>
  	</div>
  </form>
	</div>

</body>
</html>