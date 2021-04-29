<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['address_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $address_id = $_GET['address_id'];
        $address = $_GET['address'];
        $address2 = $_GET['address2'];
        $district = $_GET['district'];
        $city_id = $_GET['city_id'];
        $postal_code = $_GET['postal_code'];
        $phone = $_GET['phone'];

        $sql = "INSERT INTO `databasecw2`.`address` (`address_id`, `address`, `address2`, `district`, `city_id`, `postal_code`, `phone`, `last_update`) VALUES ('$address_id', '$address', '$address2', '$district', '$city_id', '$postal_code', '$phone', current_timestamp());";
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
        if(isset($_GET['address_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $address_id = $_GET['address_id'];
            
            $sql = "DELETE FROM `databasecw2`.`address` WHERE address_id = $address_id;";
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
        if(isset($_GET['address_id'])){

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
        
        
        $address_id = $_GET['address_id'];
        $address = $_GET['address'];
        $address2 = $_GET['address2'];
        $district = $_GET['district'];
        $city_id = $_GET['city_id'];
        $postal_code = $_GET['postal_code'];
        $phone = $_GET['phone'];


        $sql = "UPDATE `address` SET `address`='$address',address2='$address2',district='$district',city_id=$city_id,postal_code=$postal_code,phone='$phone',last_update= current_timestamp() WHERE address_id = $address_id;";
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
    <title>Address</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
  
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for address in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }
        ?>
        <form action= "address.php" method= "get">
            <input type="number" name="address_id" id="address_id" placeholder="Enter address id">
            <input type="text" name="address" id="address" placeholder="Enter address">
            <input type="text" name="address2" id="address2" placeholder="Enter address 2">
            <input type="text" name="district" id="district" placeholder="Enter your district">
            <input type="number" name="city_id" id="city_id" placeholder="Enter city id">
            <input type="number" name="postal_code" id="postal_code" placeholder="Enter postal code">
            <input type="number" name="phone" id="phone" placeholder="Enter phone">
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
