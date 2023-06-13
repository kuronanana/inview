<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css" rel="stylesheet" type="text/css">

	<title>今天吃什麼</title>

	<?php
	//error_reporting(0);
	header('Content-Type: text/html; charset=utf-8');
	require_once "class.Cart.php";  // 插入購物車的PHP類別檔
	session_start();
	include  "db.php";
	if (isset($_GET['store'])) {
		$store = $_GET['store'];
		$_SESSION['store'] = $store;
	} else {
		$store = $_SESSION['store'];
	}

	// if (isset($_GET['addr'])) {
	// 	$addr = $_GET['addr'];
	// 	$_SESSION['addr'] = $addr;
	// } else {
	// 	$addr = $_SESSION['addr'];
	// }

	// if (isset($_GET['v'])) {
	// 	$v = $_GET['v'];
	// 	$_SESSION['v'] = $v;
	// } else {
	// 	$v = $_SESSION['v'];
	// }

	// $addr = $_GET['addr']; //店家地址
	// $v = $_GET['v'];

	// echo $a;
	// exit();
	$cart = &$_SESSION['classCart']; // 指向購物車物件
	if (!is_object($cart)) {
		$cart = new Cart([  // 建立購物車物件
			"cartMaxItem"      => 0,
			"itemMaxQuantity"  => 99,
			"useCookie"        => false,
		]);
	}
	$msg = "";
	// 檢查是否是表單送回
	if (isset($_POST["Order"])) {
		// 新增至購物車

		$id = $_POST["ID"];  //店名
		$title = $_POST["Title"]; //菜名
		$price = $_POST["Price"]; //價錢
		$quantity = $_POST["quantity"]; //數量
		// echo $id . $title . $price . $quantity;
		// echo "<br/>";

		if ($quantity == "") $quantity = 1;
		$cart->add($id, $quantity, [
			"price" => $price,
			"title" => $title //菜名
		]);
		$msg = "<font color='red'>已將選購商品" . $title;
		$msg .= $quantity . "份";
		$msg .= "放入購物車!</font><br/>";
	}
	?>
</head>

<body>

	<br><br>
	<br><br>
	<?php

	// echo $addr . '&nbsp;&nbsp;&nbsp;&nbsp;' . '<a href = "https://www.google.com.tw/maps/place/'	 . $store . '/@' . $v . ',17z', '?hl=zh-TW' . '"' . '>點選以地圖開啟</a>'; //等資料庫補上地圖經緯度
	// echo "<br><br>";
	//-------------------------------------------
	// 插入函式庫的PHP檔案
	// require_once("dataAccess.php");
	// 建立dataAccess物件的資料庫連接
	// $dao = new dataAccess(
	// 	"localhost",
	// 	"root",
	// 	"",
	// 	"eat"
	// );
	$result = mysqli_query($conn, "SELECT * FROM `$menu` WHERE 店名 ='$store'");
	// $store[] = mysqli_fetch_array($result);
	?>


	<div class="con">
		<table class='main'>

			<tr>
				<th class="top">店名</th>
				<th class="top">菜名</th>
				<th class="top">價格</th>
				<th class="top">數量</th>
				<th class="top"> </th>
			</tr>
			<?php
			//--------------- 讀取資料庫記錄 ---------------

			while ($store = mysqli_fetch_array($result)) {
				echo "<form method='post' action='result.php'>";
				// for ($i = 0; $i < count($store); $i++) {
			?>
				<input type="hidden" name="ID" value="<?php echo $store[0] ?>" />
				<input type="hidden" name="Title" value="<?php echo $store[1] ?>" />
				<input type="hidden" name="Price" value="<?php echo $store[2]; ?>" />
			<?php
				echo "<td class = 'mid'>$store[0]</td>";
				echo "<td class = 'mid'>$store[1]</td>";
				echo "<td class = 'mid'>$store[2]</td>";
				echo "<td class = 'mid'><input class='txt-input' type='number' name='quantity' value ='0'/></td>";
				echo "<td class = 'mid'><input class='form-input'type='submit' name='Order' value = '訂購'/></td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table>";

			echo $msg;
			?>
			<div class="other2">
				<button class="btn1"><a href="home.php">回首頁</button>
				<button class="btn1"><a href="shoppingcart.php">檢視購物車內容</button>
			</div>
	</div>

</body>
<footer>
	<p>&copy修平科技大學專題製作</p>
</footer>

</html>