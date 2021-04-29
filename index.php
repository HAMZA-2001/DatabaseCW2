<?php
$insert = false;
$err;
if(isset($_GET['action'])){
    if($_GET['action']=='Insert'){
        if(isset($_GET['actor_id'])){
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname= "databasecw2";

        $con = mysqli_connect($server, $username, $password, $dbname);

        if(!$con){ 
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        //echo "Sucuss connecting to the db";
        
        $actor_id = $_GET['actor_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
    
        $sql = "INSERT INTO `databasecw2`.`actor` (`actor_id`, `first_name`, `last_name`, `last_update`) VALUES ('$actor_id', '$first_name', '$last_name', current_timestamp());";
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
        if(isset($_GET['actor_id'])){
        
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "databasecw2";
    
            $con = mysqli_connect($server, $username, $password, $dbname);
    
            if(!$con){ 
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            //echo "Sucuss connecting to the db";
            
            $actor_id = $_GET['actor_id'];
            
            
            
            $sql = "DELETE FROM `databasecw2`.`actor` WHERE actor_id = $actor_id;";
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
        if(isset($_GET['actor_id'])){

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
        
        
        $actor_id = $_GET['actor_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];


        $sql = "UPDATE actor SET first_name='$first_name',last_name='$last_name',last_update= current_timestamp() WHERE actor_id = $actor_id;";
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
    <title>Actor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="pic3.jpg">
    
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for actor in this form below</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'> Your changes have been saved in database </p>";}
        else if(isset($_GET['action'])){
            echo "<p class='submitMsg'> There is an ERROR found </p>";  
        }
    
        ?>
        <form action= "index.php" method= "get">
            <input type="number" name="actor_id" id="actor_id" placeholder="Enter actor id">
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name">
            <input type="text" name="last_name" id= "last_name" placeholder="Enter last name">
            <input type="submit" class="btn1" name="action" value="Insert" />
            <input type="submit" class="btn2" name="action" value="Delete" />
            <input type="submit" class="btn2" name="action" value="Update" />
        </form>
    </div>
    <script src="index.js"></script>
    <div class="centre">
        <a href="homepage.html">
            <button class="Home">HomePage</button>
        </a>
    
    </div>
</body>
</html>
