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
    $username = $_POST['user_update'];
    $sql = "SELECT * FROM $user where 帳號 = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="con">
        <div class="form">
        <form method="post" action="../user_edit/update-ok.php" enctype="multipart/form-data">
            <table class="main">
                <tr>
                    <td class='mid'>帳號：</td>
                    <td class='mid'><?php echo $username .'(不能修改)'?></td>
                </tr>
                <tr>
                    <td class='mid'>密碼：</td>
                    <td class='mid'><input class="form-input" type='password' name='passwd1' value='<?php echo $row[1] ?>' required></td>
                </tr>
                <tr>
                    <td class='mid'>再一次輸入密碼：</td>
                    <td class='mid'><input class="form-input" type='password' name='passwd2' value='<?php echo $row[1] ?>' required></td>
                </tr>
            </table>
            <div class="other">
                <button type = "submit" class="submit">送出</button> 
            </div>
        </form>
        </div>
    </div>
    <?php
        $_SESSION['update'] = $username;
        ?>
    <div class="other">
        <button class="back"><a href="../main/home.php">回首頁</button>
    </div>

</body>
<footer>
    <p>&copy修平科技大學專題製作</p>
</footer>
</html>