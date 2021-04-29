<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['store_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $store_id = $_GET['store_id'];
        $manager_staff_id = $_GET['manager_staff_id'];
        $address_id = $_GET['address_id'];

        $sql = "INSERT INTO `databasecw2`.`store` (`store_id`, `manager_staff_id`, `address_id`, `last_update`) VALUES ('$store_id','$manager_staff_id','$address_id', current_timestamp());";
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
        if(isset($_GET['store_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $store_id = $_GET['store_id'];
            
            $sql = "DELETE FROM `databasecw2`.`store` WHERE store_id = $store_id;";
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
        if(isset($_GET['store_id'])){

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
        
        $store_id = $_GET['store_id'];
        $manager_staff_id = $_GET['manager_staff_id'];
        $address_id = $_GET['address_id'];

        $sql = "UPDATE store SET manager_staff_id=$manager_staff_id,address_id=$address_id,last_update= current_timestamp() WHERE store_id = $store_id;";
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
    <meta name="viewport" content="width=device-width/3, initial-scale=0.5">
    <title>Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
    
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for store in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }

        
        ?>
        <form action= "store.php" method= "get">
            <input type="number" name="store_id" id="store_id" placeholder="Enter store id">
            <input type="number" name="manager_staff_id" id="manager_staff_id" placeholder="Enter manager_staff_id">
            <input type="number" name="address_id" id="address_id" placeholder="Enter address id">
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
