<html>
<head>
</head>
<body>
<fieldset style="width:500px;">
<form action ="" method="POST">
 <textarea name ="review_text" rows="4" cols="50"></textarea>
 <input type="hidden" name ="reviews" value="$_POST['reviews'];">
 <input name="submit_review" type="submit" value="Post Review">
<?php

include_once("connect.php");

if(isset($_GET['reviews'])){

$model_id=$_GET['reviews'];
echo $model_id;
$sql1= "select * from product natural join review where model_id='$model_id'";
$sql2= "select * from product natural join review where model_id='$model_id'";
   $result1 = mysqli_query($conn,$sql1);
   $result2 = mysqli_query($conn,$sql2);
   $rows    = mysqli_fetch_assoc($result1);

     echo "<table>" ;
?>
   <tr><td> <img src="assets/shoe_img/<?php echo $rows["image"]; ?>" class="border"></td>;
   <td> <?php echo "<b>Model:</b> " . $rows["model_name"]."<br>";
         echo "<b>Price:</b> " . $rows["model_price"]."<br>";
         echo"</td></tr></table><br><br>";
         echo"</fieldset>";

		 echo"<fieldset style=width:500px;>";
     	 echo "<table>" ;
         echo "<tr><td><b>Reviews<b></td></tr>";
    while( $row = mysqli_fetch_assoc($result2)){
?>

	 <table >

    <tr><td><?php echo $row["review"];?></td></tr>
</table>

<?php
}
echo "</table>" ;
 }
 else{
 echo"This product does not have any reviews";
 }
mysqli_close($conn);
?>
</form>
</fieldset>
</body>
</html>
