<html>
<body>
<?php
if(!isset($_SESSION)){
	session_start();
}

	include_once("connect.php");
	include_once("shoe_mart_config_file.php");

	$modelname=$_POST['modelname'];
  $type=$_POST['type'];
  $size=$_POST['size'];
  $category=$_POST['category'];
  $price  = $_POST['price'];
	$quantity = $_POST['quantity'];
	$image_path = $_POST['path'];
	$brandId= $_POST['brandId'];

	echo $modelname;


  if (empty($_POST['modelname']))  {
	echo "<script>alert('empty modelname')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	if (empty($_POST['type']))  {
	echo "<script>alert('empty type')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	if (empty($_POST['category']))  {
	echo "<script>alert('empty category')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	if (empty($_POST['price']))  {
	echo "<script>alert('empty type')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	if (empty($_POST['quantity']))  {
	echo "<script>alert('empty quantity')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	if (empty($_POST['size']))  {
	echo "<script>alert('empty size')</script>";
	echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}

   /* if ( !isset($_FILES['userFile']['type']) ) {
   die('<p>No image submitted</p></body></html>');
     }
?>
You submitted this file:<br /><br />
Temporary name: <?php echo $_FILES['userFile']['tmp_name'] ?><br />
Original name: <?php echo $_FILES['userFile']['name'] ?><br />
Size: <?php echo $_FILES['userFile']['size'] ?> bytes<br />
Type: <?php echo $_FILES['userFile']['type'] ?></p>

<?php
if ( !preg_match( '/gif|png|x-png|jpeg/', $_FILES['userFile']['type']) ) {
   die('<p>Only browser compatible images allowed</p></body></html>');
// Copy image file into a variable
} else if ( !($handle = fopen ($_FILES['userFile']['tmp_name'], "r")) ) {
   die('<p>Error opening temp file</p></body></html>');
} else if ( !($image = fread ($handle, filesize($_FILES['userFile']['tmp_name']))) ) {
   die('<p>Error reading temp file</p></body></html>');
} else {
   fclose ($handle);
   // Commit image to the database
   $image = mysql_real_escape_string($image);*/
   //$alt = htmlentities($_POST['altText']);
   //$query = 'INSERT INTO image (type,name,alt,img) VALUES ("' . $_FILES['userFile']['type'] . '","' . $_FILES['userFile']['name']  . '","' . $alt  . '","' . $image . '")';



	//if (isset($_POST['submit']) && $modelid != ''){
    //$sql = "INSERT INTO product (model_id,model_name,model_price,category,type,quantity,size,image) VALUES ('$modelid','$modelname','$price','$category','$type','$quantity','$size','$image_path')";
		$sql = "INSERT INTO product (model_name, model_price, category, type, quantity, size, image, brand_id)	VALUES	('$modelname', $price, '$category', '$type', $quantity, $size, '$image_path', $brandId)";
		echo 	$sql ;

		$result = mysqli_query($conn ,$sql) or die(mysql_error());


	if ($result==1) { // Error handling
	echo "success";
	echo "<script>alert('Record inserted successfully')</script>";
    echo "<script>setTimeout(\"location.href = '$project_root/admin_add.html';\",100);</script>";
	exit();
	}
	//}
	else{
    echo "Something went wrong! :(";
        }

?>
</body>
</html>
