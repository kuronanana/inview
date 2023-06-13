<!DOCTYPE html>
<html lang="en">
<?php
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/other.css" charset="utf-8">
  <title>消費排行榜</title>
</head>

<body>
  <center><h2>消費排行榜</h2></center>
  <div class="form">
    <form method="post" action="../report/rank_report.php">
      <div class="con">
        <table class='main'>
          <tr>
            <td class="mid">活動開始時間</td>
            <td class="mid"><input class="form-input" type="date" name="start"></td>
          </tr>
          <tr>
            <td class="mid">活動結束日期</td>
            <td class="mid"><input class="form-input" type="date" name="finish"></td>
          </tr>
        </table>
        <div class="other">
          <button type="submit" class="submit">送出</button>
        </div>
      </div>
    </form>
  </div>
  
  <div class="other">
    <button class="back"><a href="../main/home.php">回首頁</button>
  </div>
  </div>
</body>

</html>