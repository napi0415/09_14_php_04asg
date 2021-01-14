<?php


// 「dbname」「port」「host」「username」「password」を設定
// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_14;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}
// 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる.

// 参照はSELECT文!
$sql = 'SELECT * FROM wbc2018_u15_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
// $statusにSQLの実行結果が入る(取得したデータではない点に注意)

if ($status == false) {
    $error = $stmt->errorInfo(); //失敗時􏰂エラー出力
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["player_name"]}</td>";
        $output .= "<td>{$record["name_kana"]}</td>";
        $output .= "<td>{$record["player_position"]}</td>";
        $output .= "<td>{$record["uni_number"]}</td>";
        $output .= "<td>{$record["height"]}</td>";
        $output .= "<td>{$record["p_weight"]}</td>";
        $output .= "<td>{$record["league"]}</td>";
        $output .= "<td>{$record["team"]}</td>";
        $output .= "<td>{$record["area"]}</td>";
        $output .= "<td>{$record["throws"]}</td>";
        $output .= "<td>{$record["bats"]}</td>";
        $output .= "<td>{$record["run_1"]}</td>";
        $output .= "<td>{$record["run_2"]}</td>";
        $output .= "<td>{$record["ball_speed_1"]}</td>";
        $output .= "<td>{$record["ball_speed_2"]}</td>";
        $output .= "<td>{$record["ball_speed_set_1"]}</td>";
        $output .= "<td>{$record["ball_speed_set_2"]}</td>";
        $output .= "<td>{$record["second_throw_1"]}</td>";
        $output .= "<td>{$record["second_throw_2"]}</td>";
        $output .= "<td>{$record["second_throw_3"]}</td>";
        $output .= "<td>{$record["note"]}</td>";
        $output .= "</tr>";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBSC U-15日本代表トライアウト（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>WBSC U-15日本代表トライアウト（一覧画面）</legend>
        <a href="todo_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>読み</th>
                    <th>ポジション</th>
                    <th>背番号</th>
                    <th>身長</th>
                    <th>体重</th>
                    <th>所属リーグ</th>
                    <th>所属チーム</th>
                    <th>地域</th>
                    <th>投</th>
                    <th>打</th>
                    <th>一塁駆け抜け 1</th>
                    <th>一塁駆け抜け 2</th>
                    <th>球速 1</th>
                    <th>球速 2</th>
                    <th>球速 セット1</th>
                    <th>球速 セット2</th>
                    <th>セカンドスロー 1</th>
                    <th>セカンドスロー 2</th>
                    <th>セカンドスロー 3</th>
                    <th>備考</th>
                </tr>
            </thead>
            <tbody>
                <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>