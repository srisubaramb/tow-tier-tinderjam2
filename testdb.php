<?php
require 'config.php';
$stmt = $pdo->query("SELECT id,name,age,location,gender,created_at FROM users ORDER BY id DESC LIMIT 20");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: text/plain; charset=utf-8');
print_r($rows);
