<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['city_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $city_id = $_GET['city_id'];
        $city = $_GET['city'];
        $country_id = $_GET['country_id'];

        $sql = "INSERT INTO `databasecw2`.`city` (`city_id`, `city`, `country_id`, `last_update`) VALUES ('$city_id', '$city', '$country_id', current_timestamp());";
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
        if(isset($_GET['city_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $city_id = $_GET['city_id'];
            
            $sql = "DELETE FROM `databasecw2`.`city` WHERE city_id = $city_id;";
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
        if(isset($_GET['city_id'])){

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
        
        
        $city_id = $_GET['city_id'];
        $city = $_GET['city'];
        $country_id = $_GET['country_id'];

        $sql = "UPDATE city SET city='$city',country_id='$country_id',last_update= current_timestamp() WHERE country_id = $country_id;";
        //echo $sql;    

        if($con->query($sql) == true){
            $insert = true;
        } 
        else{
            $err = "ERROR: $sql <br> $con->error";
            echo $err;
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
    <meta name="viewport" content="width=device-width/3, initial-scale=0.5">
    <title>City</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
   
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for city in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }

        ?>
        <form action= "city.php" method= "get">
            <input type="number" name="city_id" id="city_id" placeholder="Enter city id">
            <input type="text" name="city" id="city" placeholder="Enter city">
            <input type="number" name="country_id" id="country_id" placeholder="Enter country id">
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
