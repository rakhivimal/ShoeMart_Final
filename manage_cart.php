<?php

		function addToCart($dataArray) {
			$dataArrayVal = array('model_id'=>$dataArray[0], 'model_name'=>$dataArray[1], 'price'=>$dataArray[2], 'quantity'=>$dataArray[3]);
			$itemArray = array($dataArray[0]=>$dataArrayVal);
			if(!empty($_SESSION["cart_item"])) {

				if(checkIfExistInSession($dataArray[0])){
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($dataArray[0] == $_SESSION["cart_item"][$k]['model_id']){
							$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
						}
					}
				} else {
					echo "Inside Else ";
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				echo "Initial add ";
				$_SESSION["cart_item"] = $itemArray;
			}

		}

		function removeFromCart($model_Id) {
			echo "Inside remove from Cart Method";
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($model_Id == $_SESSION["cart_item"][$k]['model_id']){
						unset($_SESSION["cart_item"][$k]);
					}
							
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
		}

		function emptyCart($fname) {
			echo "Inside Empty cart method";
			unset($_SESSION["cart_item"]);
		}

		function checkIfExistInSession($model_Id) {
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($model_Id == $_SESSION["cart_item"][$k]['model_id']){
						return true;
					}
				}
			}
			return false;
		}

?>
