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
    <link rel="stylesheet" type="text/css" href="../css/2.css" charset="utf-8">
    <title>今天吃什麼</title>

</head>

<body>
    <main>
        <div class=interface>
            <form method="post" action="connect.php" enctype="multipart/form-data" class="login">
                <table>
                    <h1>登入
                    </h1>
                    <tr>
                        <td><input type="text" placeholder="Username 帳號" name="username" required></td>
                    </tr>

                    <tr>
                        <td><input type="password" placeholder="Password 密碼" name="passwd" required></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="登入"></td>
                        <td><a href="../user_edit/add.htm">申請帳號</a></td>
                    </tr>

                </table>
            </form>
        </div>
    </main>
</body>
<footer>
    <p>&copy修平科技大學專題製作</p>
</footer>

</html>

<!-- <!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>今天吃什麼</title>
</head>

<body>
    <form method="post" action="connect.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="username" required></td>
            </tr>

            <tr>
                <td>密碼：</td>
                <td><input type="password" name="passwd" required></td>
            </tr>


            <tr>
                <td><input type="submit" value="登入"></td>
                <td><a href="add.htm">申請帳號</a></td>
            </tr>
        </table>
    </form>
</body>
<footer>

</footer>

</html> -->