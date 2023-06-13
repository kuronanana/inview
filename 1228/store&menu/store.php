
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/store&menu.css" rel="stylesheet" type="text/css">
  <title>查詢結果</title>
</head>

<body>
  <?php
  error_reporting(0);
  $store = $_POST['store'];
  $tel = $_POST['tel'];
  $addr = $_POST['address'];
  $v = $_POST['position'];

  
  include "../main/db.php";

  // echo $v;
  $sql = "INSERT `$company` (`店名`,`電話`,`地址`,`經緯度`)  VALUES ('$store','$tel','$addr','$v')";
  $result1 = mysqli_query($conn, $sql);
  if (!$result1)
    echo ("<br />" . "新增失敗：" . mysqli_error($conn));

  $result2 = mysqli_query($conn, "SELECT * FROM `$company` WHERE 店名 LIKE '%$store'");
  // $sql2 = "SELECT * FROM `$company` WHERE `店名` = $store";
  
  // $result2 = mysqli_query($conn, $sql2);
  
  
  ?>
  <div class="con">
    <?php
    echo "<center><h3>店家資料表</h3></center>";
    echo "<hr/>";
    echo "<table class='main'><tr>";
    echo "<th class = 'top'>店名</th><th class = 'top'>電話</th><th class = 'top'>地址</th><th class = 'top'>經緯度</th></tr>";
    //--------------- 讀取資料庫記錄 ---------------
    while ($row = mysqli_fetch_array($result2)) {
      echo "<tr>";
      echo "<td class = 'mid'>$row[0]</td>";
      echo "<td class = 'mid'>$row[1]</td>";
      echo "<td class = 'mid'>$row[2]</td>";
      echo "<td class = 'mid'>$row[3]</td>";
    }
    echo  "</table>";
    ?>
  </div>
  <div class="other">
    <button class="back"><a href="../main/home.php">回首頁</button>
  </div>
</body>

</html>