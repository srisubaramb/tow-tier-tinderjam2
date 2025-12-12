<?php
// config.php - keep this out of git
define('DB_HOST', 'database-1.czioidjifktu.us-west-2.rds.amazonaws.com');
define('DB_NAME', 'tinderjam2');
define('DB_USER', 'admin');               // you used 'admin' earlier
define('DB_PASS', 'srilord33');    // <-- REPLACE this

try {
    $pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4",
        DB_USER, DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    // debug: environment shows this page, in prod log instead
    echo "DB Connection failed: " . $e->getMessage();
    exit;
}
