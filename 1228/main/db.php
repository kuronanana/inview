<?php
$dbServer = "127.0.0.1";
$dbUser = "root";
$dbPass = "";
$dbName = "eat";
$company = "company";
$menu = "menu";
$order = "order";
$user = "user";
//連線資料庫伺服器
$conn = @mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno())
  die("<br>無法連線資料庫伺服器");

//設定連線的字元集為 UTF8 編碼
mysqli_set_charset($conn, "utf8");
