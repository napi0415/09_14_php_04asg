<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBSC U-15日本代表トライアウト（入力画面）</title>
</head>

<body>
    <form action="todo_create.php" method="POST">
        <fieldset>
            <legend>WBSC U-15日本代表トライアウト（入力画面）</legend>
            <a href="todo_read.php">一覧画面</a>
            <div>
                名前: <input type="text" name="player_name">
            </div>
            <div>
                読み: <input type="text" name="name_kana">
            </div>
            <div>
                ポジション:<br>
                <!-- <input type="text" name="player_position"> -->
                <label><input type="checkbox" name="player_position" id="player_position1" value="1">ピッチャー</label>
                <label><input type="checkbox" name="player_position" id="player_position2" value="2">キャッチャー</label>
                <label><input type="checkbox" name="player_position" id="player_position3" value="3">ファースト</label>
                <label><input type="checkbox" name="player_position" id="player_position4" value="4">セカンド</label>
                <label><input type="checkbox" name="player_position" id="player_position5" value="5">サード</label>
                <label><input type="checkbox" name="player_position" id="player_position6" value="6">ショート</label>
                <label><input type="checkbox" name="player_position" id="player_position7" value="7">レフト</label>
                <label><input type="checkbox" name="player_position" id="player_position8" value="8">センター</label>
                <label><input type="checkbox" name="player_position" id="player_position9" value="9">ライト</label>
            </div>
            <div>
                背番号: <input type="text" name="uni_number">
            </div>
            <div>
                身長: <input type="text" name="height">cm
            </div>
            <div>
                体重: <input type="text" name="p_weight">kg
            </div>
            <div>
                <!-- 所属リーグ: <input type="text" name="league"> -->

                所属リーグ:<br>
                <label>
                    <input type="radio" name="league" value="boys" /> ボーイズ</label>
                <label>
                    <input type="radio" name="league" value="young" /> ヤング</label>
                <label>
                    <input type="radio" name="league" value="senior" /> シニア</label>
                <label>
                    <input type="radio" name="league" value="flesh" /> フレッシュ</label>
                <label>
                    <input type="radio" name="league" value="pony" /> ポニー</label>

                <p>所属リーグ：<br>
                    <select name="league">
                        <option value="boys">ボーイズ</option>
                        <option value="young">ヤング</option>
                        <option value="senior">シニア</option>
                        <option value="flesh">フレッシュ</option>
                        <option value="pony">ポニー</option>

                    </select>
                </p>


            </div>
            <div>
                所属チーム: <input type="text" name="team">
            </div>
            <div>
                地域: <input type="text" name="area">
            </div>
            <div>
                投:<br>
                <!-- <input type="text" name="throws"> -->
                <label>
                    <input type="radio" name="throws" value="boys" /> 右</label>
                <label>
                    <input type="radio" name="throws" value="young" /> 左</label>

            </div>
            <div>
                打: <br>
                <!-- <input type="text" name="bats"> -->
                <label>
                    <input type="radio" name="bats" value="boys" /> 右</label>
                <label>
                    <input type="radio" name="bats" value="young" /> 左</label>
                <label>
                    <input type="radio" name="bats" value="young" /> 両</label>
            </div>
            <div>
                一塁駆け抜け 1: <input type="number" step="0.01" name="run_1">秒
            </div>
            <div>
                一塁駆け抜け 2: <input type="number" step="0.01" name="run_2">秒
            </div>
            <div>
                球速 1: <input type="text" name="ball_speed_1">km
            </div>
            <div>
                球速 2: <input type="text" name="ball_speed_2">km
            </div>
            <div>
                球速 セット１: <input type="text" name="ball_speed_set_1">km
            </div>
            <div>
                球速 セット２: <input type="text" name="ball_speed_set_2">km
            </div>
            <div>
                セカンドスロー 1: <input type="number" step="0.01" name="second_throw_1">秒
                <!-- <p>0.1秒を指定：<input type="time" name="example2" min="00:00" max="11:59" step="0.01"></p> -->
            </div>
            <div>
                セカンドスロー 2: <input type="number" step="0.01" name="second_throw_2">秒
            </div>
            <div>
                セカンドスロー 3: <input type="number" step="0.01" name="second_throw_3">秒
            </div>
            <div>
                備考: <input type="text" name="note">
            </div>
            <div>
                <button>submit</button>
            </div>
        </fieldset>
    </form>
</body>

</html>