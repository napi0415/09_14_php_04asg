<?php
// var_dump($_POST);
// exit();
if (
    !isset($_POST['player_name']) || $_POST['player_name'] == '' ||
    !isset($_POST['name_kana']) || $_POST['name_kana'] == '' ||
    !isset($_POST['player_position']) || $_POST['player_position'] == '' ||
    !isset($_POST['uni_number']) || $_POST['uni_number'] == '' ||
    !isset($_POST['height']) || $_POST['height'] == '' ||
    !isset($_POST['p_weight']) || $_POST['p_weight'] == '' ||
    !isset($_POST['league']) || $_POST['league'] == '' ||
    !isset($_POST['team']) || $_POST['team'] == '' ||
    !isset($_POST['area']) || $_POST['area'] == '' ||
    !isset($_POST['throws']) || $_POST['throws'] == '' ||
    !isset($_POST['bats']) || $_POST['bats'] == '' ||
    !isset($_POST['run_1']) || $_POST['run_1'] == '' ||
    !isset($_POST['run_2']) || $_POST['run_2'] == '' ||
    !isset($_POST['ball_speed_1']) || $_POST['ball_speed_1'] == '' ||
    !isset($_POST['ball_speed_2']) || $_POST['ball_speed_2'] == '' ||
    !isset($_POST['ball_speed_set_1']) || $_POST['ball_speed_set_1'] == '' ||
    !isset($_POST['ball_speed_set_2']) || $_POST['ball_speed_set_2'] == '' ||
    !isset($_POST['second_throw_1']) || $_POST['second_throw_1'] == '' ||
    !isset($_POST['second_throw_2']) || $_POST['second_throw_2'] == '' ||
    !isset($_POST['second_throw_3']) || $_POST['second_throw_3'] == '' ||
    !isset($_POST['note']) || $_POST['note'] == ''
) {
    exit('ParamError');
}

$player_name = $_POST['player_name'];
$name_kana = $_POST['name_kana'];
$player_position = $_POST['player_position'];
$uni_number = $_POST['uni_number'];
$height = $_POST['height'];
$p_weight = $_POST['p_weight'];
$league = $_POST['league'];
$team = $_POST['team'];
$area = $_POST['area'];
$throws = $_POST['throws'];
$bats = $_POST['bats'];
$run_1 = $_POST['run_1'];
$run_2 = $_POST['run_2'];
$ball_speed_1 = $_POST['ball_speed_1'];
$ball_speed_2 = $_POST['ball_speed_2'];
$ball_speed_set_1 = $_POST['ball_speed_set_1'];
$ball_speed_set_2 = $_POST['ball_speed_set_2'];
$second_throw_1 = $_POST['second_throw_1'];
$second_throw_2 = $_POST['second_throw_2'];
$second_throw_3 = $_POST['second_throw_3'];
$note = $_POST['note'];

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_14;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
    // exit('ok');
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

//sql作成実行
$sql = 'INSERT INTO
wbc2018_u15_table(id, player_name, name_kana, player_position, uni_number, height, p_weight, league, team, area, throws, bats, run_1, run_2, ball_speed_1, ball_speed_2, ball_speed_set_1, ball_speed_set_2, second_throw_1, second_throw_2, second_throw_3, note)
VALUES(NULL, :player_name, :name_kana, :player_position, :uni_number, :height, :p_weight, :league, :team, :area, :throws, :bats, :run_1, :run_2, :ball_speed_1, :ball_speed_2, :ball_speed_set_1, :ball_speed_set_2, :second_throw_1, :second_throw_2, :second_throw_3, :note)';


$stmt = $pdo->prepare($sql);
//バインド変数を設定
$stmt->bindValue(':player_name', $player_name, PDO::PARAM_STR);
$stmt->bindValue(':name_kana', $name_kana, PDO::PARAM_STR);
$stmt->bindValue(':player_position', $player_position, PDO::PARAM_STR);
$stmt->bindValue(':uni_number', $uni_number, PDO::PARAM_STR);
$stmt->bindValue(':height', $height, PDO::PARAM_STR);
$stmt->bindValue(':p_weight', $p_weight, PDO::PARAM_STR);
$stmt->bindValue(':league', $league, PDO::PARAM_STR);
$stmt->bindValue(':team', $team, PDO::PARAM_STR);
$stmt->bindValue(':area', $area, PDO::PARAM_STR);
$stmt->bindValue(':throws', $throws, PDO::PARAM_STR);
$stmt->bindValue(':bats', $bats, PDO::PARAM_STR);
$stmt->bindValue(':run_1', $run_1, PDO::PARAM_STR);
$stmt->bindValue(':run_2', $run_2, PDO::PARAM_STR);
$stmt->bindValue(':ball_speed_1', $ball_speed_1, PDO::PARAM_STR);
$stmt->bindValue(':ball_speed_2', $ball_speed_2, PDO::PARAM_STR);
$stmt->bindValue(':ball_speed_set_1', $ball_speed_set_1, PDO::PARAM_STR);
$stmt->bindValue(':ball_speed_set_2', $ball_speed_set_2, PDO::PARAM_STR);
$stmt->bindValue(':second_throw_1', $second_throw_1, PDO::PARAM_STR);
$stmt->bindValue(':second_throw_2', $second_throw_2, PDO::PARAM_STR);
$stmt->bindValue(':second_throw_3', $second_throw_3, PDO::PARAM_STR);
$stmt->bindValue(':note', $note, PDO::PARAM_STR);

$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    // データ登録失敗次にエラーを表示 exit('sqlError:'.$error[2]);
} else {
    // 登録ページへ移動
    header('Location:todo_input.php');
}
