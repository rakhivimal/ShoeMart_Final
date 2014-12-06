<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="shoe_mart.css">
   </head>
   <body>

   <?php
     if(!isset($_SESSION)){
       session_start();
     }
	   include_once("manage_cart.php");
	   include_once("connect.php");
     include_once("shoe_mart_config_file.php");

     if(!empty($_GET["action"])) {
       switch($_GET["action"]) {
         case "add":
            $dataArray=array($_POST["model_id"], $_POST["model_name"], $_POST["price"],$_POST["quantity"]);
            addToCart($dataArray);
            break;
         case "remove":
            removeFromCart($_GET["model_id"]);
            break;
         case "empty":
            unset($_SESSION["cart_item"]);
         break;
       }
     }

	   /* Post with data from Search
	   	* Run the Search sql and get ready with the
	   	* result for display
	   	*/
	   if (isset($_GET['search'])) {
       	$name=$_GET['search_text'];
    		$query = "SELECT model_id,image, model_name,model_price,size  FROM product,brand WHERE product.brand_id=brand.brand_id AND brand_name LIKE '%" . $name . "%'";
    		$result = mysqli_query($conn, $query);
    		if (!$result) {
    			die(mysqli_error($conn));
    		}
	   }
   ?>

      <div class= "main">
         <div class="title">
            <h1>Shoe@mart</h1>
         </div>
         <div class="left-Nav">
           <?php include('left_nav.php'); ?>
         </div>

         <div class ="Center-Nav" style="text-align: center;width:1250px">
            <p>
              <b><u>View cart</u></b> <a href="<?=$project_root?>/cart_items.php">
                <img src="assets/logo/cart.jpg" alt="Mountain View" style="width:60px;height:60px">
              </a>
            </p>

              <?php
                  if (isset($result)) {
                  ?>
                  <table class ="result-table">
                  <?php
                  	while ($row = mysqli_fetch_array($result)) {
                  		echo "<tr>";
                  		/*Model Id*/

                  		/*Image*/
                  		echo "<td>" ."<img src='assets/shoe_img/".$row[1]."' class='border' >". "</td>";

                  		echo "<td> <b>Model:</b>" . $row[2] . "<br>";
                  		echo "<b>Price:</b>" . $row[3] . "<br>";
                  		echo "<b>Size:</b>" . $row[4] . "<br>";
                      echo " <form method='post' action='brand_search.php?action=add&search=Search&search_text=".$name."'>";
                      echo " <input type='hidden' name='model_id' value='".$row[0]."'/> ";
                      echo " <input type='hidden' name='model_name' value='".$row[2]."'/> ";
                      echo " <input type='hidden' name='price' value='".$row[3]."'/> ";
                      echo " <input type='text' name='quantity' value='1' size='2' /> ";
                      echo " <input type='submit' value='Add to cart'/>";

                      echo "</form>";
                  		echo "</tr>";
                  	}
                  ?>
                  </table>
                  <?php
                  }
                  ?>

         </div>

         <div class="footer">
            Copyright © Team-7
         </div>
      </div>
   </body>
</html>
