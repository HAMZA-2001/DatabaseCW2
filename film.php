<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['film_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $film_id = $_GET['film_id'];
        $release_year = $_GET['release_year'];
        $language_id = $_GET['language_id'];
        $original_language_id = $_GET['original_language_id'];
        $rental_duration = $_GET['rental_duration'];
        $rental_rate = $_GET['rental_rate'];
        $length = $_GET['length'];
        $replacement_cost = $_GET['replacement_cost'];
        $rating = $_GET['rating'];
        $special_features = $_GET['special_features'];

        $sql = "INSERT INTO `databasecw2`.`film` (`film_id`,`release_year`,`language_id`, `original_language_id`, `rental_rate`, `length`, `replacement_cost`, `rating`, `special_features`, `last_update`) VALUES  ('$film_id','$release_year','$language_id', '$original_language_id', '$rental_rate', '$length', '$replacement_cost', '$rating', '$special_features', current_timestamp());";
        //echo $sql;    

        if($con->query($sql) == true){
            $insert = true;
        } 
        else{
            $err = "ERROR: $sql <br> $con->error";
            //echo $err;
        }

        $con->close();
}
    }
    else if($_GET['action'] == 'Delete'){
        if(isset($_GET['film_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $film_id = $_GET['film_id'];
    
            $sql = "DELETE FROM `databasecw2`.`film` WHERE film_id = $film_id;";
            //echo $sql;
    
            if($con->query($sql) == true){
                $insert = true;
            } 
            else{
                $err = "ERROR: $sql <br> $con->error";
            }
    
            $con->close();
    
    }
}
else if(isset($_GET['action'])){
    if($_GET['action']=='Update'){
        if(isset($_GET['film_id'])){

            /*UPDATE table_name
            SET column1 = value1, column2 = value2, ...
            WHERE condition;*/
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        
        $film_id = $_GET['film_id'];
        $release_year = $_GET['release_year'];
        $language_id = $_GET['language_id'];
        $original_language_id = $_GET['original_language_id'];
        $rental_duration = $_GET['rental_duration'];
        $rental_rate = $_GET['rental_rate'];
        $length = $_GET['length'];
        $replacement_cost = $_GET['replacement_cost'];
        $rating = $_GET['rating'];
        $special_features = $_GET['special_features'];

        $sql = "UPDATE film SET film_id=$film_id,release_year=$release_year,language_id=$language_id,original_language_id=$original_language_id,rental_duration=$rental_duration,rental_rate=$rental_rate, `length`=$length,replacement_cost=$replacement_cost,rating=$rating,special_features='$special_features',last_update= current_timestamp() WHERE film_id = $film_id;";
        //echo $sql;    

        if($con->query($sql) == true){
            $insert = true;
        } 
        else{
            $err = "ERROR: $sql <br> $con->error";
            //echo $err;
        }

        $con->close();
        }
    }
}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    
    <title>Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for film in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }
        ?>
        <form action= "film.php" method= "get">
            <input type="number" name="film_id" id="film_id" placeholder="Enter film id">
            <input type="number" name="release_year" id="release_year" placeholder="Enter release year">
            <input type="number" name="language_id" id="language_id" placeholder="Enter language id">
            <input type="number" name="original_language_id" id="original_language_id" placeholder="Enter original language id">
            <input type="number" name= "rental_duration" id="rental_duration" placeholder="Enter rental duration">
            <input type="number" name="rental_rate" id="rental_rate" placeholder="Enter rental rate">
            <input type="number" name="length" id="length" placeholder="Enter length">
            <input type="number" name="replacement_cost" id="replacement_cost" placeholder="Enter replacement cost">
            <input type="number" name="rating" id="rating" placeholder="Enter rating">
            <input type="text" name="special_features" id="special_features" placeholder="Enter special feature">
            <input type="submit" class="btn1" name="action" value="Insert" />
            <input type="submit" class="btn2" name="action" value="Delete" />
            <input type="submit" class="btn2" name="action" value="Update" />
        </form>

    
    </div>
    <div class="centre">
        <a href="homepage.html">
            <button class="Home">HomePage</button>
        </a>
    
    </div>
    
    <script src="index.js"></script>
</body>
</html>
