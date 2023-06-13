<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css" rel="stylesheet" type="text/css">
    <title>查詢結果</title>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    $food = $_POST['food'];  //抓取搜尋關鍵字
    include('db.php');      //連接資料庫
    ?>
</head>

<body>


    <div class="title">
        <p>以下是您的搜尋結果</p>
    </div>


    <?php
    if (1) {
        // echo '<h3>今天想吃' . $food . '：</h3>';
        //搜尋菜單裡有關鍵字的菜名
        // $sql1 = "SELECT * FROM $tb2Name where 菜名 = $food";
        $sql1 = "SELECT * FROM $menu where 菜名 LIKE '%$food'"; //找菜名
        $key1 = mysqli_query($conn, $sql1);
        // echo "<form method = 'post' action = 'result.php'>";
    ?>
        <!-- <h3>相關菜餚：</h3> -->
        <!-- <table>
            <tr>
                <th>店名</th>
                <th>菜名</th>
                <th>價格</th>
            </tr> -->
        <?php
        while ($row1 = mysqli_fetch_array($key1)) {
            // echo "<tr >";
            // echo "<td>$row1[0]</td>"; //店名
            // echo "<td>$row1[1]</td>"; //菜名
            // echo "<td>$row1[2]</td>"; //價格
            // echo "</tr>";
            $sql2 = "SELECT 店名,電話,地址 FROM $company where 店名 LIKE '%$row1[0]'"; //找店家
            $key2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($key2);
            $store[] = $row2[0];
        }
        // echo "</table><br>";
        $store = array_unique($store, SORT_REGULAR); //去掉陣列中重複的值
        $store = array_values($store);
        // print_r($store);
        // exit();
        ?>
        <!-- <h3>店家資訊：</h3> -->
        <div class="all">

            <table class="main">
                <tr>
                    <th class="top">店名</th>
                    <th class="top">電話</th>
                    <th class="top">地址</th>
                </tr>
            <?php
            for ($i = 0; $i < count($store); $i++) {
                $answer = $store[$i];
                $sql2 = "SELECT * FROM $company where 店名 ='$answer'"; //找店家
                $key2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($key2);

                echo "<form method = 'post' action = 'result.php'>";
                echo "<tr>";

                echo "<td class = 'mid'><a href='result.php?store=" . $row2[0] . "&amp;" . "addr =" . $row2[2] . "&amp;" . "v =" . $row2[3] . "'>";
                echo $row2[0] . '</a></td>';

                echo "<td class = 'mid'>$row2[1]</td>";
                echo "<td class = 'mid'>$row2[2]</td>";

                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";
        }
            ?>

            <div class="other">
                <h2>點擊店名前往點餐畫面</h2>
                <button class="back"><a href="home.php">返回</button>
            </div>
        </div>

</body>
<footer>
    <p>&copy修平科技大學專題製作</p>
</footer>

</html>