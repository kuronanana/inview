<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/other.css" rel="stylesheet" type="text/css">
  <title>ranking</title>
</head>

<body>
  
      <?php
      $start = $_POST['start'];
      $finish = $_POST['finish'];
      ?>
      <center>
      <h3>活動開始時間:<?php echo $start ?></h3><br/>
      <h3>活動結束時間:<?php echo $finish?></h3>
      <center>
      <?php
      include "../main/db.php"; //引用資料庫

      $result = mysqli_query($conn, "SELECT * FROM `$order` where 日期>='$start' and 日期<='$finish' ");
      ?>
      <div class="con">
        <?php

        echo "<table class='main'><tr>"; //建欄位
        echo "<th class = 'top'>帳號</th><th class = 'top'>消費總金額</th></tr>";

        //--------------- 讀取資料庫記錄 ---------------
        while ($row = mysqli_fetch_array($result)) { //row[] 2->帳號 5->價格 6->數量
          $account = $row[2];
          if (isset($sum[$account]))
            $sum[$account] = $sum[$account] + $row[5] * $row[6]; //單一品項總金額
          else
            $sum[$account] = $row[5] * $row[6];
        }
        arsort($sum);
        foreach ($sum as $rank => $value) {
          echo "<tr>";
          echo "<td class = 'mid'>$rank</td>";
          echo "<td class = 'mid'>$value</td>";
          echo "</tr>";
        }

        echo "</table>";
        mysqli_close($conn);
        ?>
      </div>
      <div class="other">
        <button class="back"><a href="../main/home.php">回首頁</button>
      </div>
</body>

</html>