<?php
header("Access-Control-Allow-Origin: *");

$_GET;
try {
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $recipes = $pdo->query('SELECT * FROM recipe')
                    ->fetchAll();

    header('Content-Type: application/json');
    echo json_encode($recipes);
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
