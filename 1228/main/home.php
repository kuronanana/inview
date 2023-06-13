<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,user-scalable = no ,initial-scale= 1,maximum-scale = 1">
	<link rel="stylesheet" href="../css/home.css" rel="stylesheet" type="text/css">
	<title>今天吃什麼</title>
</head>

<body>
	<?php
	header('Content-Type: text/html; charset=utf-8');
	//啟用session，此語法要放在網頁最前方
	session_start();
	//error_reporting(0);
	$username = $_SESSION['username'];
	if (isset($username)) {
		include("db.php");
	?>
		<div class="top">
			<?php

			if ($_SESSION['role'] == 'admin') { //管理者
				echo "<h3>" . $username . "</h3>";
			?>
		</div>
		<div class="sidemenu">
			<div class="contant1">
				<nav>
					<a href="../user_edit/add.htm">新增使用者</a>
					<a href="../user_edit/user_update.htm">使用者資料更新</a>
					<a href="../user_edit/user_query.htm">使用者資料查詢</a>
					<a href="../store&menu/store.htm">新增店家</a>
					<a href="../store&menu/menu.htm">新增菜單</a>
					<a href="../report/dr.php">日報表</a>
					<a href="../report/mr.php">月報表</a>
					<a href="../report/rank.php">消費排行榜</a>
					<a href="logout.php">登出</a>
				</nav>
			</div>
		</div>
		<div class="top">
		<?php
			} else { //一般使用者
				echo "<h3>" . $username . "</h3>";
		?>
		</div>
		<div class="sidemenu">
			<div class="contant1">
				<nav>
					<a href="../user_edit/user_update_result_normal.php">基本資料更新</a>
					<a href="logout.php">登出</a>
				</nav>
			</div>
		</div>
<?php }
		} ?>

<div class="contant2">
	<main>
		<h1>今天想吃什麼?</h1>
		<form method="post" action="found.php" enctype="multipart/form-data">
			<input type="search" placeholder="請輸入關鍵字" name="food" required>
			<!-- <button><i class="fas fa-search"></i></button> -->
			<input class="key" type="submit" value="送出">
		</form>
		<hr>
		<div class="random">
			<a href="random.php">想不到吃什麼?</a>
		</div>
	</main>
</div>




</body>
<footer>
	<p>&copy修平科技大學專題製作</p>
</footer>


</html>