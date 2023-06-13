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
  header('Content-Type: text/html; charset=utf-8');
  //啟用session，此語法要放在網頁最前方
  session_start();
  $mr_result = $_POST['month'];
  $timestamp = strtotime($mr_result); //將字串轉成時間戳記
  $month = date('y-m', $timestamp); //將收到的時間戳記以日期格式丟給$dat

  include "../main/db.php";
  $sql = "select * from `order`";
  $result = mysqli_query($conn, $sql);
  ?>
  <br><br><br><br>
  <div class="con">
    <?php
    echo "<table class='main'>";
    echo "<tr bgcolor='pink'><th class = 'top'>日期</th><th class = 'top'>時間</th><th class = 'top'>帳號</th><th class = 'top'>店名</th><th class = 'top'>菜名</th><th class = 'top'>價格</th><th class = 'top'>數量</th>";
    $total = 0;
    while ($row = mysqli_fetch_array($result)) { //每找到一筆資料就做一次迴圈內的程式
      $key_timestamp = strtotime($row[0]); //把找到的資料轉乘時間戳記
      $key_date = date('y-m', $key_timestamp); //將收到的時間戳記以日期格式丟給$key_date
      if ($month == $key_date) { //日期符合
        $price = $row[5] * $row[6];
        $total = $total + $price;
        echo "<tr>";
        echo "<td class = 'mid'>$row[0]</td>";
        echo "<td class = 'mid'>$row[1]</td>";
        echo "<td class = 'mid'>$row[2]</td>";
        echo "<td class = 'mid'>$row[3]</td>";
        echo "<td class = 'mid'>$row[4]</td>";
        echo "<td class = 'mid'>$row[5]</td>";
        echo "<td class = 'mid'>$row[6]</td>";
        echo "</tr>";
      }
    }
    echo "<tr>";
    echo "<td colspan='7' align='right' bgcolor='yellow'>";
    echo "總金額=NT$$total";
    echo "元";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
  </div>
  <div class="other">
    <button class="back"><a href="../main/home.php">回首頁</button>
  </div>
</body>

</html>