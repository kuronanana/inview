<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css" rel="stylesheet" type="text/css">
	<title>今天吃什麼</title>
</head>

<body>
<?php
if (1) {
	$sql1 = "SELECT * FROM $menu"; //找菜名
	$key1 = mysqli_query($conn, $sql1); //執行mysql搜尋
	while ($row1 = mysqli_fetch_array($key1)) { //每找到一筆資料就return true
		$sql2 = "SELECT 店名,電話,地址 FROM $company where 店名 LIKE '%$row1[0]'"; //找店家
		$key2 = mysqli_query($conn, $sql2);
		while ($row2 = mysqli_fetch_array($key2)) {
			$store[] = $row2[0];
		}
	}
	$store = array_unique($store, SORT_REGULAR); //去掉陣列中重複的值
	$store = array_values($store);
	// print_r($store);
	// exit();
}

$R = rand(1, count($store)); //產生亂數
?>
<div class="center">
	<h1>
		<?php 
		// echo $R; 
		?>
	</h1>
	</div>
<?php

$sql3 = "SELECT * FROM $company";
$result3 = mysqli_query($conn, $sql3);
mysqli_data_seek($result3, $R);
?>
	<div class="all">
		<table class="main">
			<tr>
        			<th class="top">店名</th>
                		<th class="top">電話</th>
                		<th class="top">地址</th>
        		</tr>
<?php
if ($row = mysqli_fetch_row($result3)) {
	echo "<form method = 'post' action = 'result.php'>";
	echo "<tr>";
	echo "<td class = 'mid'>";
	echo "<a href='result.php?store=" . $row[0] . "&amp;" . "addr =" . $row[2] . "&amp;" . "v =" . $row[3] . "'>";
	echo $row[0] . '</a></td>';
	// echo "<td><a href = ''>$row[0]</td>"; //店名
	echo "<td class = 'mid'>$row[1]</td>"; //菜名
	echo "<td class = 'mid'>$row[2]</td>"; //價格
	echo "</tr>";
	echo "</form>";
}
?>
		</table>
	</div>

	<div class="other">
                <h2>點擊店名前往點餐畫面</h2>
                <button class="back"><a href="home.php">返回</button>
            </div>
</body>

<footer>
    <p>&copy修平科技大學專題製作</p>
</footer>
</html>


