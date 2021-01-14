<?php
// var_dump($_GET);
// exit();

include("functions.php");
$id = $_GET['id'];
// DB接続&id名でテーブルから検索
$pdo = connect_to_db();
$sql = 'SELECT * FROM wbc2018_u15_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

// fetch()で1レコード取得できる. 
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);

    // var_dump($record);
    // exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBSC U-15日本代表トライアウト（編集画面）</title>
</head>

<body>
    <form action="todo_update.php" method="POST">
        <fieldset>
            <legend>WBSC U-15日本代表トライアウト（編集画面）</legend>
            <a href="todo_read.php">一覧画面</a>
            <div>
                名前: <input type="text" name="player_name">
            </div>
            <div>
                読み: <input type="text" name="name_kana">
            </div>
            <div>
                ポジション: <input type="text" name="player_position">
            </div>
            <div>
                背番号: <input type="text" name="uni_number">
            </div>
            <div>
                身長: <input type="text" name="height">
            </div>
            <div>
                体重: <input type="text" name="p_weight">
            </div>
            <div>
                所属リーグ: <input type="text" name="league">
            </div>
            <div>
                所属チーム: <input type="text" name="team">
            </div>
            <div>
                地域: <input type="text" name="area">
            </div>
            <div>
                投: <input type="text" name="throws">
            </div>
            <div>
                打: <input type="text" name="bats">
            </div>
            <div>
                <!-- 一塁駆け抜け 1: <input type="number" step="0.01" name="run_1"> -->
                一塁駆け抜け 1: <input type="text" step="0.01" name="run_1">
            </div>
            <div>
                <!-- 一塁駆け抜け 2: <input type="number" step="0.01" name="run_2"> -->
                一塁駆け抜け 2: <input type="text" step="0.01" name="run_2">
            </div>
            <div>
                球速 1: <input type="text" name="ball_speed_1">
            </div>
            <div>
                球速 2: <input type="text" name="ball_speed_2">
            </div>
            <div>
                球速 セット１: <input type="text" name="ball_speed_set_1">
            </div>
            <div>
                球速 セット２: <input type="text" name="ball_speed_set_2">
            </div>
            <div>
                セカンドスロー 1: <input type="text" step="0.01" name="second_throw_1">
            </div>
            <div>
                セカンドスロー 2: <input type="text" step="0.01" name="second_throw_2">
            </div>
            <div>
                セカンドスロー 3: <input type="text" step="0.01" name="second_throw_3">
            </div>
            <div>
                備考: <input type="text" name="note">
            </div>
            <div>
                <button>submit</button>
                <input name="id" value="<?= $record['id'] ?>">
            </div>

        </fieldset>
    </form>

</body>

</html>