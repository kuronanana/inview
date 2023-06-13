<?php
header('Content-Type: text/html; charset=utf-8');
//啟用session，此語法要放在網頁最前方
session_start();
//連接資料庫
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/connect.css" rel="stylesheet" type="text/css">
  <title>connect</title>
</head>

<body>
  <?php
  $id = $_POST['username'];
  $pw = $_POST['passwd'];
  //搜尋資料庫資料
  $sql = "SELECT * FROM $user where 帳號 = '$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  //判斷帳號與密碼是否為空白
  //以及MySQL資料庫裡是否有這個會員
  if ($row['帳號'] == $id && $row['密碼'] == $pw) {
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['username'] = $id;
    if ($id == 'admin') // 管理者
      $_SESSION['role'] = 'admin';
    else // 一般帳號
      $_SESSION['role'] = 'user';
  ?>
  <h4>登入成功!</h4>
  <?php
    echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
  } else {
  ?>
  <h4>登入失敗!</h4>
  <?php
    echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
  }
  ?>
</body>
<footer>
  <p>&copy修平科技大學專題製作</p>
</footer>

</html>