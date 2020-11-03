<?php
    define('DB_DATABASE', 'YIGroupBlog');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    try {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        echo 'DBと接続しました。';
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }
    ?>