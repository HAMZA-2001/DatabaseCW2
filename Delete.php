<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
table, th, td {
  border: 1px solid black;
}
</style>
<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$output=null;
$retval=null;
exec('whoami', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>
<?php
//change the server file
//require "test_server.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $errors = array();

    if ($_POST['table'] == '') { $errors[] = "Please fill the form."; }
    if ($_POST['column'] == '') { $errors[] = "Please fill the form."; }
    if ($_POST['keyword'] == '') { $errors[] = "Please fill the form."; }

if (count($errors)==0){
function showTables($table) {

//database variable, change if different
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "databasecw2";

$db = new mysqli($servername,$username,$password,$dbname);

$table=$_POST['table'];
$column=$_POST['column'];
$keyword='"'.$_POST['keyword'].'"';

$query="DELETE FROM $table WHERE $column = $keyword";
//$returnTables = mysqli_query($db, $query);

//$sql_columns_name = "SHOW COLUMNS FROM $table";

//$sql_columns_result = mysqli_query($db,$sql_columns_name);

//$column_arr = array();

//echo '<table class="w3-table w3-striped">';
//echo '<tr class="w3-light-grey">';
//while($row = mysqli_fetch_array($sql_columns_result)){
  //$column_arr[] = $row['Field'];
  //echo "<th>".$row['Field']."</th>";
//}
//echo "</tr>";


//while ($row = mysqli_fetch_array($returnTables)) {
 //   echo "<tr>"; 
   // for ($i=0; $i < count($column_arr); $i++) { 
    //      echo "<td>".$row[$column_arr[$i]]."</td>";
    //}
    //cho "</tr>";
}
}

//echo '</table>';
//$table=$_POST['table'];
//echo showTables($table);
}
else
echo '<p> please fill up all fields<p>';
?>


<script>
//format is table name: ["column name"...]
//modify naming here if theres changes to structure of database
var tableObject = {

    "actor": ["actor_id", "first_name", "last_name", "last_update"],   
    "address": ["address_id", "address", "address2", "district", "city_id","postal_code","phone","last_update"],
    "category": ["category_id","name","last_update"],
    "city": ["city_id","city","country_id"],
    "country": ["country_id","country","last_update"],
    "customer": ["customer_id","store_id","first_name","last_name","email","address_id","active","create_date","last_update"],
    "film": ["film_id", "release_year","language_id","original_language_id","rental_duration","rental_rate","length","replacement_cost","rating","special_features","last_update"],
    "film_actor": ["actor_id","film_id","last_update"],
    "film_category": ["film_id","category_id","last_update"],
    "film_text": ["film_id","title","description"],
    "payment": ["payment_id","customer_id", "staff_id","rental_id","amount","payment_date","last_update"],
    "rental": ["rental_id","rental_date","inventory_id","customer_id","return_date","staff_id","last_update"],
    "staff": ["staff_id","first_name","last_name","address_id","picture","email","store_id","active","username","password","last_update"],
    "inventory": ["inventory_id","film_id","store_id","last_update"],
    "language": ["language_id","name","last_update"],
    "store": ["store_id","manager_staff_id","address_id","last_update"],
  }
window.onload = function() {
  var tableSel = document.getElementById("table");
  var columnSel = document.getElementById("column");
  for (var x in tableObject) {
    tableSel.options[tableSel.options.length] = new Option(x, x);
  }
  tableSel.onchange = function() {
    //empty columns dropdown
    columnSel.length = 1;
    //display correct values
    var z = tableObject[this.value];
    for (var i = 0; i < z.length; i++) {
      columnSel.options[columnSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
</head> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<h1>Database search</h1>

<form name="form2" id="form2" method="POST">
tables: <select name="table" id="table">
    <option value="" selected="selected">Select table</option>
  </select>
  <br><br>
columns: <select name="column" id="column">
    <option value=" " selected="selected">Please select table first</option>
    <br><br>
  </select>
  <label for="keyword">keyword:</label>
  <input type="text" id="keyword" name="keyword" value="">
  <br><br>
  <input type="submit" value="Submit">  
</form>

</body>
</html>