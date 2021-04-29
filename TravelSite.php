
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Actor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg1" src="bg1.jpg" alt="blue-green">
    <div class="container">
        <h3>HOPE YOU ARE HAVING A GOOD DAY</h3>
        <p>Enter details for actor in this form below</p>
        <form action= "index.php" method= "post">
            <input type="number" name="actor_id" id="actor_id" placeholder="Enter actor id">
            <input type="text" name="first_name" id="first_name" placeholder="Enter first name">
            <input type="text" name="last_name" id= "last_name" placeholder="Enter last name">
            <button class="btn1">Insert</button>
            <button class="btn2">Delete</button>

        
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
