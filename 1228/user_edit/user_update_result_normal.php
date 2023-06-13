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
    // if (isset($_SESSION['username'])) {
    include  "../main/db.php";
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM $user where 帳號 = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="con">
        <?php
        echo '<form method="post" action="../user_edit/update-ok_normal.php" enctype="multipart/form-data">';
        echo '<table class="main">';
        echo "<tr><td class='mid'>帳號：</td><td class='mid'>$username (不能修改)</td></tr>";
        echo "<tr><td class='mid'>密碼：</td><td class='mid'><input type='password' name='passwd1'  required></td></tr>";
        echo "<tr><td class='mid'>再一次輸入密碼：</td><td class='mid'><input type='password' name='passwd2'  required></td></tr>";
        echo '<tr><td class="mid"><input type="submit" value="送出"></td><td class="mid"><input type="reset" value="清除"></td></tr>';
        echo   '</table></form>';

        ?>
    </div>
    <div class="other">
        <button class="back"><a href="../main/home.php">回首頁</button>
    </div>

</body>

</html>