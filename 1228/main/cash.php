<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/main.css" rel="stylesheet" type="text/css">
   <title>結帳</title>
</head>

<body>
   <div class="con">
      <table class='main'>
         <tr>

            <td class="top">店名</td>
            <td class="top">菜名</td>
            <td class="top">價格</td>
            <td class="top">數量</td>
            <td class="top">小計</td>
         </tr>
         <?php
         // 設定報告等級
         error_reporting(E_ERROR | E_WARNING);
         require_once "class.Cart.php";  // 插入購物車的PHP類別檔
         session_start();  // 啟用交談期
         include("db.php");
         $cart = &$_SESSION['classCart']; // 指向購物車物件
         if (!is_object($cart)) {
            $cart = new Cart([  // 建立購物車物件
               "cartMaxItem"      => 0,
               "itemMaxQuantity"  => 99,
               "useCookie"        => false,
            ]);
         }
         $flag = false;
         if (!$cart->isEmpty()) { // 檢查購物車是否有商品
            $total = 0;
            // 顯示購物車的內容
            date_default_timezone_set('Asia/Taipei'); //時區
            $day = date("Y-m-d");
            $time = date("H:i:s");
         ?><center>
               <?php

               echo "<h3>" . $day . "<br/>" . $time . "</h3>";
               ?>
            </center>
         <?php
            $_SESSION['day'] = $day; //傳出日期
            $_SESSION['time'] = $time; //傳出時間
            foreach ($cart->getItems() as $items) {

               if ($flag) {   // 切換顯示色彩
                  $flag = false;
                  $color = "#FF99CC";
               } else {
                  $flag = true;
                  $color = "#99FFC";
               }
               foreach ($items as $item) {
                  $quantity = $item['quantity']; //數量
                  $price = $item['attributes']['price'];
                  $subtotal = $quantity * $price; //小計

                  echo "<tr bgcolor='" . $color . "'>";
                  // 顯示選購的商品資料
                  echo "<td class = 'mid'>" . $item['id'] . "</td>";
                  echo "<td class = 'mid'>" . $item['attributes']['title'] . "</td>";
                  echo "<td class = 'mid'>" . number_format($price, 2) . "</td>";
                  echo "<td class = 'mid'>" . $quantity . "</td>";
                  echo "<td class = 'mid'>" . number_format($subtotal, 2) . "</td>";
                  $username = $_SESSION['username'];
                  $Id = $item['id'];
                  $title = $item['attributes']['title'];
                  $sql = "INSERT INTO  `order` (`日期`,`時間`, `帳號`, `店名`, `菜名`, `價格`, `數量`) 
				      VALUE ('$day','$time','$username', '$Id','$title','$price','$quantity') ";
                  $result = $conn->query($sql);
                  if (!$result) {
                     die($conn->error);
                  }

                  // if ($result == 1) {
                  //    echo "<h3>訂單已送出</h3>";
                  // }
               }
            }
            $cart->clear();
         } else {
            echo "目前購物車沒有選購商品!";
         }
         if ($result == 1) {
            echo "<h3>訂單已送出</h3>";
         }
         ?>
      </table>

      <div class="other2">
         <button class="btn1"><a href="home.php">回首頁</button>
         <!-- <button class="btn1"><a href="shoppingcart.php">返回購物車</button> -->
         <button class="btn1"><a href="result.php">返回點餐畫面</button>
      </div>
   </div>
</body>

</html>