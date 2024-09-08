<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dress login Salesperson</title>
  <link rel="stylesheet" type="text/css" href="/project_EMall/src/server.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<!-- sales login section -->
	<div class="dressSales mt-32">
  <div class="header">
  	<h2>Salesperson Login [DRESS]</h2>
  </div>
	 
  <form method="post" action="dress_sales_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="sales_username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="sales_password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn bg-blue-500 font-bold p-px-5 text-m border-2 border-solid rounded-xl" name="dress_sales_user">Login</button>
  	</div>
  </form>
</div>

</body>
</html>