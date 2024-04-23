<?php
// データベースに接続
require_once "db.php";

// POSTデータを受け取る
$posts = $_POST;
// var_dump($posts);
$price = $posts['price'];

// TODO: 合計金額「sales.price」を保存するSQLを作成
$sql = "INSERT INTO sales (price) VALUES ({$price});";
var_dump($sql);
// TODO: SQLを実行
// TODO: レジ画面に戻る

// header('Location: index.php');
