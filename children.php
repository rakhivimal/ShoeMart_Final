<!DOCTYPE html>
<html>
<head>
<style>
body{
 background-color:#F1E690;
 font-family: "sans-serif";
}
div.title{
color:blue;
padding:20px;
height:30px;
background:#E3CC20;
font-weight: bold;
font-size: 20px;
}
h1{
position:absolute;
top:0px;
left:20px;
}
div.left-Nav{
color:red;
padding:20px;
height:600px;
width:110px;
background:#E3CC20;
font-weight: bold;
}
div.brands{
float:right;
position:absolute;
top:80px;
right:10px;
}
#images{
position:absolute;
top:10px;
right:20px;
}
.border {border: 1px solid #000; Width:200px;height:150px;}
div.code-section{
position:absolute;
top:80px;
left:300px;
}

</style>
</head>
<body>
       <script src="change_image.js"></script>
       <div class= "main">
       <div class="title">
       <h1>Shoe@mart</h1>
	   </div>
       <div class="left-Nav">
         <?php include('left_nav.php'); ?>
       </div>

	   <div class="brands">
	   <img src="logo1.gif" style="width:90px;height:90px"><br>
	   <img src="logo2.gif" style="width:90px;height:90px"><br>
	   <img src="logo3.gif" style="width:90px;height:90px"><br>
	   <img src="logo4.gif" style="width:90px;height:90px"><br>
	   <img src="logo5.gif" style="width:90px;height:90px"><br>
	    <img src="logo4.gif" style="width:90px;height:90px">
	   </div>

	   <div class="code-section">
<p><b>Sort By:<b></p>
<form action="" method="post">
<input type="radio" name="sort" value="price">Price
<input type="radio" name="sort" value="size">Size
<input type="submit" value="sort" name ="sortby"><br><br>
</form>
<?php
session_start();
include_once("connect.php");

if(isset($_POST['sortby'])){
if($_POST["sort"]=="price"){
 $sql = "select * from product where category = 'children' order by model_price";
}
 elseif($_POST["sort"]=="size"){
$sql = "select * from product where category = 'children' order by size";
}
else{
  $sql = "SELECT * FROM product where category='children'";
  }
   }
   if(!(isset($_POST['sortby']))){
   $sql = "SELECT * FROM product where category='children'";
   }
  $result = mysqli_query($conn,$sql);


  if ( !($result = mysqli_query($conn,$sql)) ) {

      die('<p>Error reading database</p></body></html>');
   }
    while( $row = mysqli_fetch_assoc($result)){
?>
	 <table >
	 <form action="review.php" method="post">
    <tr><td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['model_id']; ?>"></td>
   <td> <img src="assets/shoe_img/<?php echo $row["image"]; ?>" class="border"><br></td>
         <td>  <?php echo "<b>Model:</b> " . $row["model_name"]."<br>";
	          echo "<b>Price:</b> " . $row["model_price"]."<br>";?>
	          <select id="size" name="size">
              <option value="0">--Select Size--</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              </select> <br>
			  <input type="submit" name ="submit" value="Add to Cart"> <br>
			  <input type="submit" name ="review_submit" value="Reviews"></form></td></tr>
</table>
<?php
}
mysqli_close($conn);
?>
 </div>

     <div class="footer">
     Copyright © Team-7
     </div>
	 </div>
</body>
</html>
