<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP連線資料庫</title>
    <style>
        h1,
        h2,
        h3,
        h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>PHP連線資料庫</h1>
    <?php
    // $dsn = "mysql:host=localhost; charset=utf8; dbname=school2";
    // $pdo = new PDO($dsn, 'root', '');

    $conn = mysqli_connect('localhost', 'root', '', 'school2');
    $sql = "SELECT `students`.*, `dept`.`code`, `dept`.`name` as '科系' FROM `students`,`dept` WHERE `dept`.`id`=`students`.`dept`";

    // $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_BOTH);

    // 改用sqli連線方式
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($query);
    // MYSQLI_BOTH(default), MYSQLI_ASSOC ,MYSQLI_NUM
    // $rows = mysqli_fetch_all($query);
    // function() 函式型

    // var_dump()傾印
    // echo var_dump($query);

    // echo $rows[0][3] ;
    echo "<pre>";
    print_r($rows);
    echo "</pre>";

    // 用mysqli_fetch_array取資料, 每次單筆
    // $count = 0;
    // while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    //     $count++;
    //     break;
    // }
    // echo $count;

    ?>
</body>

</html>