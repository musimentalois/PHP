<?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $dbName = "stockmanagement";



$dsn = "mysql:host=$host;dbname=$dbName";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pwd, $options);
    $query = 'INSERT INTO products(product_Name , brand , supplier_phone , supplier ) VALUES (? ,  ? ,  ? ,  ?)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$prodname , $brand , $suphone , $sup]);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


?>