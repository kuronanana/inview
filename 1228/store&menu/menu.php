<!DOCTYPE html>
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
  $name = $_POST['menu'];
  $price = $_POST['price'];
  $from = $_POST['from'];

  include "../main/db.php";

  $sql = "INSERT `$menu` (`店名`,`菜名`,`價格`)  VALUES ('$from','$name','$price')";
  $result = mysqli_query($conn, $sql);
  if (!$result)
    echo ("<br />" . "新增失敗：" . mysqli_error($conn));

  //菜單表格
  $result = mysqli_query($conn, "SELECT * FROM `$menu` WHERE 菜名 LIKE '%$name'");
  ?>
  
  <div class="con">
    <?php
    echo "<center><h3>菜單資料表</h3></center>";
    echo "<hr/>";
    echo "<table class='main'><tr>";
    echo "<th class = 'top'>店名</th><th class = 'top'>菜名</th><th class = 'top'>價格</th></tr>";
    while ($row2 = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td class = 'mid'>$row2[0]</td>";
      echo "<td class = 'mid'>$row2[1]</td>";
      echo "<td class = 'mid'>$row2[2]</td>";
    }
    echo  "</table>";
    ?>
  </div>
  <div class="other">
    <button class="back"><a href="../main/home.php">回首頁</button>
  </div>
</body>

</html>