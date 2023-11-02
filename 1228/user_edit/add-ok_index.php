<?php
header('Content-Type: text/html; charset=utf-8');
include  "../main/db.php";
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
echo "帳號：" . $username . "<br />";
echo "密碼：" . $passwd . "<br />";
echo "姓名：" . $name . "<br />";
echo "電話：" . $phone . "<br />";
echo "地址：" . $address . "<br />";
echo "<br />";

$sql = "INSERT `$user` (`帳號`,`密碼`,`姓名`,`電話`,`地址`)  VALUES ('$username','$passwd','$name','$phone','$address')";
$result = mysqli_query($conn, $sql);
if (!$result)
  echo ("<br />" . "新增失敗：" . mysqli_error($conn));

$result = mysqli_query($conn, "SELECT * FROM `$user`");
echo "<table  border=1><tr>";
echo "<th>帳號</th><th>密碼</th><th>姓名</th><th>電話</th><th>地址</th></tr>";
//--------------- 讀取資料庫記錄 ---------------
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>$row[0]</td>";
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  echo "</tr>";
}
echo  "</table>";
// echo "<br>" . $_SERVER["REMOTE_ADDR"];

mysqli_close($conn);

echo '<a href = "../main/index.html">返回登入畫面</a>';
