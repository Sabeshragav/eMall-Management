<?php
session_start();

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'e_mall');

//DRESS ADMIN SECTION

$columns= ['customer_id', 'customer_name','mobile_number','item_purchased','MRP', 'quantity','total_price'];
$dressFetchData = dress_fetch_data($db, $columns);


function dress_fetch_data($db, $columns){
	$tableName="dress_billing";
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY customer_id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

//REMOVE SCRIPT

if (isset($_POST['dressRemoveCustomer'])) {
  $dressToRemove = mysqli_real_escape_string($db, $_POST['dressToRemove']);
  

  if (count($errors) == 0) {

  	$query = "DELETE FROM dress_billing WHERE customer_id = '$dressToRemove'";
  	mysqli_query($db, $query);
  }

	$redirect_url = "dress_admin_access.php";
	header("Location: $redirect_url");
	exit(); 

}

//DRESS BILLING SECTION
if (isset($_POST['dress_proceed'])) {
  $customerName = mysqli_real_escape_string($db, $_POST['customerName']);
  $customerNum = mysqli_real_escape_string($db, $_POST['customerNum']);
  $itemName = mysqli_real_escape_string($db, $_POST['itemName']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $totalPrice = mysqli_real_escape_string($db, $_POST['totalPrice']);
  

  if (count($errors) == 0) {

  	$query = "INSERT INTO dress_billing (customer_name,mobile_number,item_purchased,MRP,quantity,total_price) 
  			  VALUES('$customerName','$customerNum','$itemName','$price','$quantity','$totalPrice')";
  	mysqli_query($db, $query);
  }

	$redirect_url = "dress_data_added.html";
	header("Location: $redirect_url");
	exit(); 

}

// DRESS ADMIN LOGIN USER
if (isset($_POST['dress_admin_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $password = mysqli_real_escape_string($db, $_POST['admin_password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM dress_admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dress_admin_index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//DRESS SALES LOGIN USER

if (isset($_POST['dress_sales_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['sales_username']);
  $password = mysqli_real_escape_string($db, $_POST['sales_password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM dress_sales WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dress_sales_index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}













//FURNITURE ADMIN SECTION


$furnitureFetchData = furniture_fetch_data($db, $columns);


function furniture_fetch_data($db, $columns){
	$tableName="furniture_billing";
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY customer_id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

//REMOVE SCRIPT

if (isset($_POST['furnitureRemoveCustomer'])) {
  $furnitureToRemove = mysqli_real_escape_string($db, $_POST['furnitureToRemove']);
  

  if (count($errors) == 0) {

  	$query = "DELETE FROM furniture_billing WHERE customer_id = '$furnitureToRemove'";
  	mysqli_query($db, $query);
  }

	$redirect_url = "furniture_admin_access.php";
	header("Location: $redirect_url");
	exit(); 

}

//FURNITURE BILLING SECTION
if (isset($_POST['furniture_proceed'])) {
	$customerName = mysqli_real_escape_string($db, $_POST['customerName']);
	$customerNum = mysqli_real_escape_string($db, $_POST['customerNum']);
	$itemName = mysqli_real_escape_string($db, $_POST['itemName']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
	$totalPrice = mysqli_real_escape_string($db, $_POST['totalPrice']);
	
  
	if (count($errors) == 0) {
  
		$query = "INSERT INTO furniture_billing (customer_name,mobile_number,item_purchased,MRP,quantity,total_price) 
				  VALUES('$customerName','$customerNum','$itemName','$price','$quantity','$totalPrice')";
		mysqli_query($db, $query);
	}
  
	  $redirect_url = "furniture_data_added.html";
	  header("Location: $redirect_url");
	  exit(); 
  
  }

// FURNITURE ADMIN LOGIN USER
if (isset($_POST['furniture_login_admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $password = mysqli_real_escape_string($db, $_POST['admin_password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM furniture_admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: furniture_admin_index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


//FURNITURE SALES LOGIN USER

if (isset($_POST['furniture_sales_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['sales_username']);
  $password = mysqli_real_escape_string($db, $_POST['sales_password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM furniture_sales WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: furniture_sales_index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}












//FOODCOURT ADMIN SECTION


$foodFetchData = food_fetch_data($db, $columns);


function food_fetch_data($db, $columns){
	$tableName="food_billing";
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY customer_id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

//REMOVE SCRIPT

if (isset($_POST['foodRemoveCustomer'])) {
  $foodToRemove = mysqli_real_escape_string($db, $_POST['foodToRemove']);
  

  if (count($errors) == 0) {

  	$query = "DELETE FROM food_billing WHERE customer_id = '$foodToRemove'";
  	mysqli_query($db, $query);
  }

	$redirect_url = "food_admin_access.php";
	header("Location: $redirect_url");
	exit(); 

}



//FOODCOURT BILLING SECTION
if (isset($_POST['food_proceed'])) {
	$customerName = mysqli_real_escape_string($db, $_POST['customerName']);
	$customerNum = mysqli_real_escape_string($db, $_POST['customerNum']);
	$itemName = mysqli_real_escape_string($db, $_POST['itemName']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
	$totalPrice = mysqli_real_escape_string($db, $_POST['totalPrice']);
	
  
	if (count($errors) == 0) {
  
		$query = "INSERT INTO food_billing (customer_name,mobile_number,item_purchased,MRP,quantity,total_price) 
				  VALUES('$customerName','$customerNum','$itemName','$price','$quantity','$totalPrice')";
		mysqli_query($db, $query);
	}
  
	  $redirect_url = "food_data_added.html";
	  header("Location: $redirect_url");
	  exit(); 
  
  }

// FOODCOURT ADMIN LOGIN USER
if (isset($_POST['food_login_admin'])) {
	$username = mysqli_real_escape_string($db, $_POST['admin_username']);
	$password = mysqli_real_escape_string($db, $_POST['admin_password']);
  
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
  
	if (count($errors) == 0) {
		$query = "SELECT * FROM food_admin WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		  $_SESSION['username'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: food_admin_index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
  }
  

//FOODCOURT SALES LOGIN USER

if (isset($_POST['food_sales_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['sales_username']);
	$password = mysqli_real_escape_string($db, $_POST['sales_password']);
  
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
  
	if (count($errors) == 0) {
		$query = "SELECT * FROM food_sales WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		  $_SESSION['username'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: food_sales_index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
  }
  

?>
