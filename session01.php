<?php
// session変数を定義して値を入れよう
session_start();
$_SESSION['num'] = 100;    // session変数の宣言
echo $_SESSION['num'];
