<html>

<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php  
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "databasecw2";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($_GET["table"] == "country") {
  $sql ="SELECT * FROM country";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>country_id</th>
    <th>country</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["country_id"] ."</td><td>".  $row["country"] ."</td><td>". $row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "city"){
	$sql ="SELECT * FROM city";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>city_id</th>
    <th>city</th>
	<th> country_id</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["city_id"] ."</td><td>".  $row["city"] ."</td><td>". $row["country_id"] ."</td><td>".$row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "address"){
	$sql ="SELECT * FROM address";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>address_id</th>
    <th>address</th>
	<th> address2</th>
    <th>district</th>
	<th>city_id</th>
	<th>postal_code</th>
	<th>phone</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["address_id"] ."</td><td>".  $row["address"] ."</td><td>". $row["address2"] ."</td><td>".$row["district"] ."</td><td>".  $row["city_id"] ."</td><td>".  $row["postal_code"] ."</td><td>".  $row["phone"] ."</td><td>".  $row["address"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "customer"){
	$sql ="SELECT * FROM customer";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>customer_id</th>
    <th>store_id</th>
	<th> first_name</th>
    <th>last_name</th>
	<th>email</th>
	<th>address_id</th>
	<th>active</th>
	<th>create_date</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["customer_id"] ."</td><td>".  $row["store_id"] ."</td><td>". $row["first_name"] ."</td><td>".$row["last_name"] ."</td><td>".  $row["email"] ."</td><td>".  $row["address_id"] ."</td><td>".  $row["active"] ."</td><td>".  $row["create_date"]."</td><td>". $row["last_update"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "payment"){
	$sql ="SELECT * FROM payment";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>payment_id</th>
    <th>customer_id</th>
	<th> staff_id</th>
    <th>rental_id</th>
	<th>amount</th>
	<th>payment_date</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["payment_id"] ."</td><td>".  $row["customer_id"] ."</td><td>". $row["staff_id"] ."</td><td>".$row["rental_id"] ."</td><td>".  $row["amount"] ."</td><td>".  $row["payment_date"]  ."</td><td>". $row["last_update"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "staff"){
	$sql ="SELECT * FROM staff";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>staff_id</th>
	<th> first_name</th>
	<th> last_name</th>
	<th> address_id</th>
    <th>picture</th>
	<th>email</th>
	<th>store_id</th>
	<th>active</th>
	<th>username</th>
	<th>password</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["staff_id"] ."</td><td>".  $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>".$row["address_id"] ."</td><td>".$row["picture"] ."</td><td>".  $row["email"] ."</td><td>".  $row["store_id"] ."</td><td>".  $row["active"] ."</td><td>".  $row["username"]."</td><td>". $row["password"]."</td><td>".$row["last_update"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "actor"){
	$sql ="SELECT * FROM actor";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>actor_id</th>
    <th>first_name</th>
	<th> last_name</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["actor_id"] ."</td><td>".  $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>".$row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "film_actor") {
  $sql ="SELECT * FROM film_actor";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>actor_id</th>
    <th>film_id</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["actor_id"] ."</td><td>".  $row["film_id"] ."</td><td>". $row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "store"){
	$sql ="SELECT * FROM store";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>store_id</th>
    <th>manager_staff_id</th>
	<th> address_id</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["store_id"] ."</td><td>".  $row["manager_staff_id"] ."</td><td>". $row["address_id"] ."</td><td>".$row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "inventory") {
  $sql ="SELECT * FROM inventory";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>inventory_id</th>
    <th>film_id</th>
	<th>store_id</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["inventory_id"] ."</td><td>".  $row["film_id"] ."</td><td>". $row["store_id"]."</td><td>".$row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "rental"){
	$sql ="SELECT * FROM rental";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>rental_id</th>
	<th> rental_date</th>
	<th> inventory_id</th>
	<th> customer_id</th>
    <th>staff_id</th>
	<th>return_date</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["rental_id"] ."</td><td>".  $row["rental_date"] ."</td><td>". $row["inventory_id"] ."</td><td>".$row["customer_id"] ."</td><td>".$row["staff_staff_id"] ."</td><td>".  $row["return_date"] ."</td><td>".$row["last_update"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "language") {
  $sql ="SELECT * FROM language";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>language_id</th>
    <th>name</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["language_id"] ."</td><td>".  $row["name"] ."</td><td>". $row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "film"){
	$sql ="SELECT * FROM film";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>film_id</th>
	<th> release_year</th>
	<th> language_id</th>
	<th> original_language_id</th>
    <th>rental_duration</th>
	<th>rental_rate</th>
	<th>length</th>
	<th>replacement_cost</th>
	<th>rating</th>
	<th>special_features</th>
	<th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["film_id"] ."</td><td>".  $row["release_year"] ."</td><td>". $row["language_id"] ."</td><td>".$row["original_language_id"] ."</td><td>".$row["rental_duration"] ."</td><td>".  $row["rental_rate"] ."</td><td>".  $row["length"] ."</td><td>".  $row["replacement_cost"] ."</td><td>".  $row["rating"]."</td><td>". $row["special_features"]."</td><td>".$row["last_update"]."</td></tr>";
	  }
	  echo '</table></div>';
}
}

if ($_GET["table"] == "film_category") {
  $sql ="SELECT * FROM film_category";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>film_id</th>
    <th>category_id</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["film_id"] ."</td><td>".  $row["category_id"] ."</td><td>". $row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "film_text") {
  $sql ="SELECT * FROM film_text";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>film_id</th>
    <th>title</th>
    <th>description</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["film_id"] ."</td><td>".  $row["title"] ."</td><td>". $row["description"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}

if ($_GET["table"] == "category") {
  $sql ="SELECT * FROM category";
  $result = $conn -> query($sql);
  
  echo '<div class="w3-container">
  <table class="w3-table w3-striped">
  <thead>
  <tr class="w3-light-grey">
    <th>category_id</th>
    <th>name</th>
    <th>last_update</th>
  </tr>
</thead>';

  if ($result->num_rows >0) { 
	  while($row= $result->fetch_assoc()) {
		  echo "<tr><td>". $row["category_id"] ."</td><td>".  $row["name"] ."</td><td>". $row["last_update"] ."</td></tr>";
	  }
	  echo '</table></div>';
  }
}
?>
</body>
</html>