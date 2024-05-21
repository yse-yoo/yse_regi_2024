<?php
require_once "app.php";

checkPostRequest();

update($pdo, $_POST);

header('Location: index.php');

function checkPostRequest()
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        exit;
    }
}

function update($pdo, $posts)
{
    if (!is_numeric($posts['price'])) {
        $errors['update'] = "売上計上できませんでした";
        $_SESSION[APP_KEY]['errors'] = $errors;
        return;
    }

    $sql = "INSERT INTO sales (price) VALUES (:price);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($posts);
}
