<?php 
session_start();
include('function.php');
echo display($arr);
// echo $arr ;
$id = $_POST['listid'];
foreach($arr as $key => $val){
	if($id ==)
}
$product = getproduct($id,$arr);
$cart = array();
array_push($cart,$product);
$_SESSION['cart'] = $cart ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="main">
		<div id="products">
			
		</div>
	</div>
	<div class="table"></div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>
</html>