<?php
header('Content-Type: text/html; charset=utf-8');
//啟用session，此語法要放在網頁最前方
session_start();
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
			echo '修改成功!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
		} else {
			echo '修改失敗!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
		}
	} else {
		echo '兩次密碼不一樣!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/home.php>';
	}
} else {
	echo '您無權限觀看此頁面!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=../main/index.html>';
}
