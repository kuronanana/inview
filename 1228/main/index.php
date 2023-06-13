<?php
header('Content-Type: text/html; charset=utf-8');
// echo "歡迎第<strong>";
// // 檢查計數檔案是否存在
// if (!file_exists("counter.txt")) {
//     $counter = 0;
//     $file = fopen("counter.txt", "w"); // 開啟檔案
//     fputs($file, $counter); // 將計數寫入檔案
//     fclose($file); // 關閉檔案
// } else { // 開啟檔案
//     $file = fopen('counter.txt', 'r+');
//     // 以位元組的方式讀取檔案
//     $counter = fread($file, filesize("counter.txt"));
//     fclose($file); // 關閉檔案
// }
// $counter += 1; // 增加計數
// // 以寫入模式開啟檔案，並將新計數寫入檔案
// $file = fopen("counter.txt", "w+");
// fputs($file, $counter);
// fclose($file);
// echo $counter;
// echo "</strong>位訪客\n";
?>


<html lang="zh-tw">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.css" charset="utf-8">
    <title>今天吃什麼</title>
</head>

<body>
    <div class="overlay">
        <div class="form">
            <form method="post" action="connect.php" enctype="multipart/form-data" class="login">

                <div class="con">

                    <header class="head-form">
                        <h2>今天吃什麼</h2>
                        <p>點餐系統</p>
                    </header>

                    <!-- <br> -->

                    <div class="field-set">

                        <input class="form-input" id="txt-input" name="username" type="text" placeholder="Username 帳號" required>

                        <br>

                        <input class="form-input" type="password" placeholder="Password 密碼" id="pwd" name="passwd" required>

                        <br>

                        <button class="log-in"> 登入 </button>


                    </div>

                </div>

            </form>
            <div class="other">
                <button class="submits sign-up"><a href="../user_edit/add_index.htm">註冊</button>
            </div>

        </div>
</body>
<footer>
    <p>&copy;修平科技大學專題製作</p>
</footer>

</html>