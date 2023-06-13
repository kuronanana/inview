<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mr&dr.css" charset="utf-8">
    <title>日報表</title>
    <?php
    // header('Content-Type: text/html; charset=utf-8');
    // session_start();
    ?>
</head>

<body>
    <center><h2>日報表</h2></center>
    <div class="form">
        <form action="../report/dr_result.php" method="post">
            <div class="con">
                <div class="field-set">
                    <tr>
                        <td class="mid"> <input class="form-input" type="date" name="date"></td>
                    </tr>
                    <tr>
                        <div class="other">
                            <button type="submit" class="submit">搜尋</button>
                        </div>
                    </tr>
                </div>
            </div>
        </form>
        
    </div>
    <div class="other">
            <button class="back"><a href="../main/home.php">回首頁</button>
        </div>
</body>

</html>