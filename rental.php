<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['inventory_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $retal_id = $_GET['rental_id'];
        $rental_date = $_GET['rental_date'];
        $inventory_id = $_GET['inventory_id'];
        $customer_id = $_GET['customer_id'];
        $staff_id = $_GET['staff_id'];
        $return_date = $_GET['return_date'];
 
        $sql = "INSERT INTO `databasecw2`.`rental` (`rental_id`, `rental_date`, `inventory_id`, `customer_id`, `staff_id`, `return_date` , `last_update`) VALUES ('$rental_id','$rental_date','$inventory_id','$customer_id','$staff_id', '$return_date', current_timestamp());";
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
        if(isset($_GET['rental_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $retal_id = $_GET['rental_id'];
            
            
            $sql = "DELETE FROM `databasecw2`.`rental` WHERE rental_id = $rental_id;";
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
        if(isset($_GET['rental_id'])){

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
        
        
        $retal_id = $_GET['rental_id'];
        $rental_date = $_GET['rental_date'];
        $inventory_id = $_GET['inventory_id'];
        $customer_id = $_GET['customer_id'];
        $staff_id = $_GET['staff_id'];
        $return_date = $_GET['return_date'];


        $sql = "UPDATE rental SET rental_id=$rental_id,rental_date='$rental_date',inventory_id=$inventory_id, customer_id=$customer_id,staff_id=$staff_id, return_date = '$return_date',last_update= current_timestamp() WHERE inventory_id = $inventory_id;";
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
    <title>Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for rental in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }

        
        ?>
        <form action= "rental.php" method= "get">
            <input type="number" name="rental_id" id="rental_id" placeholder="Enter rental id">
            <input type="datetime-local" name="rental_date" id="rental_date" placeholder="Enter rental date">
            <input type="number" name="inventory_id" id="inventory_id" placeholder="Enter inventory id">
            <input type="number" name="customer_id" id="customer_id" placeholder="Enter customer id">
            <input type="number" name="staff_id" id="staff_id" placeholder="Enter staff id">
            <input type="datetime-local" name="return_date" id="return_date" placeholder="Enter return date">
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
