<?php
header('Content-Type: text/html; charset=utf-8');
//啟用session，此語法要放在網頁最前方
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/connect.css" rel="stylesheet" type="text/css">
	<title>result</title>
</head>
<body>
	


<?php
if (isset($_SESSION['update'])) {
	include "../main/db.php";
	$pw1 = $_POST['passwd1'];
	$pw2 = $_POST['passwd2'];

	if ($pw1 == $pw2) {
		$username = $_SESSION['update']; //帳號
		$sql = "UPDATE `$user`
			SET 密碼 = '$pw1'
			WHERE 帳號 = '$username'";

		$result = mysqli_query($conn, $sql);
		//取得被更新的紀錄筆數
		if ($result) {
			?>
			<h4>修改成功!</h4>
			<?php
			echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
		} else {
			?>
			<h4>修改失敗!</h4>
			<?php
			echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
		}
	} else {
		?>
		<h4>兩次密碼不一樣!</h4>
		<?php
		echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
	}
} else {
	?>
	<h4>您無權限觀看此頁面!</h4>
	<?php

	echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/index.php>';
}
?>
</body>
</html>