<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['customer_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $customer_id = $_GET['customer_id'];
        $store_id = $_GET['store_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $address_id = $_GET['address_id'];
        $active = $_GET['active'];
        $create_date = $_GET['create_date'];

        $sql = "INSERT INTO `databasecw2`.`customer` (`customer_id`,`store_id`,`first_name`, `last_name`, `email`, `address_id`, `active`, `create_date`, `last_update`) VALUES ('$customer_id','$store_id', '$first_name', '$last_name', '$email', '$address_id', '$active', '$create_date' , current_timestamp());";
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
        if(isset($_GET['customer_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $customer_id = $_GET['customer_id'];
            
            $sql = "DELETE FROM `databasecw2`.`customer` WHERE customer_id = $customer_id;";
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
        if(isset($_GET['customer_id'])){

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
        
        
        $customer_id = $_GET['customer_id'];
        $store_id = $_GET['store_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $address_id = $_GET['address_id'];
        $active = $_GET['active'];
        $create_date = $_GET['create_date'];

        $sql = "UPDATE customer SET store_id=$store_id,first_name='$first_name',last_name='$last_name',email='$email',address_id=$address_id,active=$active,create_date='$create_date',last_update= current_timestamp() WHERE customer_id = $customer_id;";
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
    <title>Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">

    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for customer in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }
        ?>
        <form action= "customer.php" method= "get">
            <input type="number" name="customer_id" id="customer_id" placeholder="Enter customer id">
            <input type="number" name="store_id" id="store_id" placeholder="Enter store id">
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name">
            <input type="text" name="last_name" id="last_name" placeholder="Enter last name">
            <input type="text" name="email" id="email" placeholder="Enter email">
            <input type="number" name="address_id" id="address_id" placeholder="Enter address id">
            <input type="number" name="active" id="active" placeholder="active">
            <input type="datetime-local" name="create_date" id="create_date" placeholder="create_date">
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
