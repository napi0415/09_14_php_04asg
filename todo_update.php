<?php
// var_dump($_POST);
// exit();

include('functions.php');
$pdo = connect_to_db();


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



$sql = 'UPDATE wbc2018_u15_table 
SET player_name=:player_name, name_kana=:name_kana, player_position=:player_position, uni_number=:uni_number, height=:height, p_weight=:p_weight, league=:league, team=:team, area=:area, throws=:throws, bats=:bats, run_1=:run_1, run_2=:run_2, 
ball_speed_1=:ball_speed_1, ball_speed_2=:ball_speed_2, ball_speed_set_1=:ball_speed_set_1, ball_speed_set_2=:ball_speed_set_2, second_throw_1=:second_throw_1, second_throw_2=:second_throw_2, second_throw_3=:second_throw_3, note=:note
updated_at=sysdate() WHERE id=:id';


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


//データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する 
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する 
    header("Location:todo_read.php");
    exit();
}
