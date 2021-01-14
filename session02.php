<?php
// sessionに保存されている変数を取り出し，計算して表示しよう
session_start();
$_SESSION['num'] += 1;     // session変数を+1する // 結果を出力
echo $_SESSION['num'];     // 結果を出力
