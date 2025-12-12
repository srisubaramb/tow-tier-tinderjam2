<?php
require 'config.php';

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$age = isset($_POST['age']) && $_POST['age'] !== '' ? (int)$_POST['age'] : null;
$location = isset($_POST['loc']) ? trim($_POST['loc']) : null; // 'loc' from your index.html
$gender = isset($_POST['gender']) && in_array($_POST['gender'], ['male','female','other','Male','Female','Other']) ? $_POST['gender'] : null;

if ($name === '') {
    die('Name is required. <a href="index.php">Go back</a>');
}

$sql = "INSERT INTO users (name, age, location, gender) VALUES (:name, :age, :location, :gender)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':name' => $name,
    ':age' => $age,
    ':location' => $location,
    ':gender' => $gender
]);

// success: redirect back with a flag
header('Location: index.php?ok=1');
exit;
