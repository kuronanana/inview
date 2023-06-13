<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/other.css" rel="stylesheet" type="text/css">
	<title>查詢結果</title>
</head>

<body>
	<?php
	session_start();
	include  "../main/db.php";

	$username = $_POST['user_query'];

	$sql = "SELECT * FROM $user where `帳號`= $username";
	$key = mysqli_query($conn, $sql);


	$result = mysqli_query($conn, "SELECT * FROM `$menu`");
?>
	<br><br><br><br>
		<div class="con">

	<?php
	echo "<table class='main'><tr>";
	echo "<th class = 'top'>帳號</th><th class = 'top'>密碼</th><th class = 'top'>姓名</th><th class = 'top'>電話</th><th class = 'top'>地址</th></tr>";
	while ($row = mysqli_fetch_array($key)) {
		echo "<tr>";
		echo "<td class = 'mid'>$row[0]</td>";
		echo "<td class = 'mid'>$row[1]</td>";
		echo "<td class = 'mid'>$row[2]</td>";
		echo "<td class = 'mid'>$row[3]</td>";
		echo "<td class = 'mid'>$row[4]</td>";
	}
	echo  "</table>";
	?>
	
		</div>
	<div class="other">
        <button class="back"><a href = "../main/home.php">回首頁</button>
    	</div>
</body>

</html>