<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['country_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $country_id = $_GET['country_id'];
        $country = $_GET['country'];

        $sql = "INSERT INTO `databasecw2`.`country` (`country_id`, `country`, `last_update`) VALUES ('$country_id', '$country', current_timestamp());";
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
        if(isset($_GET['country_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $country_id = $_GET['country_id'];
            $country = $_GET['country'];
    
            $sql = "DELETE FROM `databasecw2`.`country` WHERE country_id = $country_id;";
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
        if(isset($_GET['country_id'])){

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
        
        
        $country_id = $_GET['country_id'];
        $country = $_GET['country'];


        $sql = "UPDATE country SET country='$country',last_update= current_timestamp() WHERE country_id = $country_id;";
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
    <title>Country</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">

    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for country in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }

        ?>
        <form action= "country.php" method= "get">
            <input type="number" name="country_id" id="country_id" placeholder="Enter country id">
            <input type="text" name="country" id="country" placeholder="Enter country">
            <input type="submit" class="btn1" name="action" value="Insert" />
            <input type="submit" class="btn2" name="action" value="Delete" />
            <input type="submit" class="btn2" name="action" value="Update" />
        </form>
    
    </div>
    </div>
    <script src="index.js"></script>
    <div class="centre">
        <a href="homepage.html">
            <button class="Home">HomePage</button>
        </a>
    
    </div>
    <script src="index.js"></script>
</body>
</html>
