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
	   </div>

     <div class="footer">
     Copyright © Team-7
     </div>
	 </div>
</body>
</html>
