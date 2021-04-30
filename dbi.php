<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>coursework</title> 
 <style>
            .my-menu {
/*Sets all the content of dropdown div to center*/
                text-align: center; 
            }
			#table{
 width:300px;
 height:50px; 
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.div1 {
	margin: 0;
	position: absolute;
	top:57%;
	left:49%;
}
.div2 {
	margin: 0;
	position: absolute;
	top:30%;
	left:40%;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.bg1{
    width: 100%;
    position: absolute;
    z-index: -1;
  height: auto;

}
.p{
    font-size: 40px;
    color: rgb(194, 21, 142);

}
h1{
        text-align: center;
        font-size: 40px;
        color:  purple;

        }
.Home{
   
   color: white;
   background: rgb(91, 17, 151);
   padding: 15px 20px;
   font-size: 15px;
   border: 2px solid white;
   border-radius: 20px;

}
.but2{
    color: white;
    background: purple;
    padding: 5px 5px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 20px;
    margin-left: 48%;
}
        </style>
</head>

<body background="pic3.jpg">
<div class=div2>
  <h1><u>CHOOSE A TABLE :</u></h1>
  <a href="Coverpage.html">
<p style = "text-align: center">Click here to go back</p>
</a>
</div>
<form action= "Test.php" method= "get">


<div class="center">
<select name="table" id=table >
  <option value="country">country</option>
  <option value="city">city</option>
  <option value="address">address</option>
  <option value="customer">customer</option>
  <option value="payment">payment</option>
  <option value="staff">staff</option>
  <option value="actor">actor</option>
  <option value="film_actor">film_actor</option>
  <option value="store">store</option>
  <option value="inventory">inventory</option>
  <option value="rental">rental</option>
  <option value="language">language</option>
  <option value="film">film</option>
  <option value="film_category">film_category</option>
  <option value="film_text">film_text</option>
  <option value="category">category</option>
</select>
</div>
</div>
<div class="div1">
<input type="submit" name="submit" onclick=table><br><br>


</div>

</form>
</body>

</html>
