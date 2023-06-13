<?php
header('Content-Type: text/html; charset=utf-8');
include  "../main/db.php";
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/other.css" rel="stylesheet" type="text/css">
  <title>更新資料</title>
</head>

<body>
  <div class="form_report">
    <div class="con">
      <div class="update">
        <table class="main">
          <tr>
            <td class="mid">帳號：</td>
            <td class="mid"><?php echo $username ?></td>
          </tr>
          <tr>
            <td class="mid">密碼：</td>
            <td class="mid"><?php echo $passwd ?></td>
          </tr>
          <tr>
            <td class="mid">姓名：</td>
            <td class="mid"><?php echo $name ?></td>
          </tr>
          <tr>
            <td class="mid">電話：</td>
            <td class="mid"><?php echo $phone ?></td>
          </tr>
          <tr>
            <td class="mid">地址：</td>
            <td class="mid"><?php echo $address ?></td>
          </tr>
        </table>
        <?php
        // echo "帳號：" . $username . "<br />";
        // echo "密碼：" . $passwd . "<br />";
        // echo "姓名：" . $name . "<br />";
        // echo "電話：" . $phone . "<br />";
        // echo "地址：" . $address . "<br />";
        // echo "<br />";
        ?>
      </div>
    </div>
  </div>
  <div class="center">
    <?php


    $sql = "INSERT `$user` (`帳號`,`密碼`,`姓名`,`電話`,`地址`)  VALUES ('$username','$passwd','$name','$phone','$address')";
    $result = mysqli_query($conn, $sql);
    if (!$result)
      // echo ("<br />" . "新增失敗：" . mysqli_error($conn));
      echo  "<p>新增失敗</p>";
    // $result = mysqli_query($conn, "SELECT * FROM `$user`");
    // echo "<table  class = 'main2'><tr>";
    // echo "<th class = 'top'>帳號</th><th class = 'top'>密碼</th><th class = 'top'>姓名</th><th class = 'top'>電話</th><th class = 'top'>地址</th></tr>";
    // //--------------- 讀取資料庫記錄 ---------------
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<tr>";
    //   echo "<td class = 'mid'>$row[0]</td>";
    //   echo "<td class = 'mid'>$row[1]</td>";
    //   echo "<td class = 'mid'>$row[2]</td>";
    //   echo "<td class = 'mid'>$row[3]</td>";
    //   echo "<td class = 'mid'>$row[4]</td>";
    //   echo "</tr>";
    // }
    // echo  "</table>";
    // echo "<br>" . $_SERVER["REMOTE_ADDR"];

    mysqli_close($conn);

    ?>
  </div>
  <div class="other">
    <button class="back"><a href="../main/home.php">回首頁</button>
  </div>

</body>

</html>