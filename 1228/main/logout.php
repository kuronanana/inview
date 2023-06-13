<?php
header('Content-Type: text/html; charset=utf-8');
//啟用session，此語法要放在網頁最前方
session_start();
//刪除session的username變數
session_unset();



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/connect.css" rel="stylesheet" type="text/css">
	<title>登出中</title>
</head>

<body>
	<h4>登出中...</h4>
	<?php
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	//也可執行 header("Refresh: 2; url=index.php"); 
	//也可執行 header('Location:index.php');
	?>

</body>

<footer>
	<p>&copy修平科技大學專題製作</p>
</footer>

</html>