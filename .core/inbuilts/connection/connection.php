<?php

$pdo;

function initializeDatabase() {
    global $pdo;
    if (defined('DB_HOST') && defined('DB_NAME') && defined('DB_USER')) {
        switch (DB) {
            case "pgsql":
                $pdo = postgres(DB_HOST, DB_NAME, DB_USER, DB_PASS);
                break;
            case "mysql":
                $pdo = mysql_pdo(DB_HOST, DB_NAME, DB_USER, DB_PASS);
                break;
            default:
                die("Unsupported database type.");
        }
    } else {
        die("Database configuration constants are not defined.");
    }
}

// if (DB_HOST !== '' && DB_NAME !== '' && DB_USER !== '') {
//     // global $pdo;
//     switch (DB) {
//         case "pgsql":
//             $pdo = postgres(DB_HOST, DB_NAME, DB_USER, DB_PASS);
//             break;
//         case "mysql":
//             $pdo = mysql_pdo(DB_HOST, DB_NAME, DB_USER, DB_PASS);
//             break;
//     }
// }

function postgres($host, $dbname, $user, $password) {
    // global $pdo;
    try {
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;";
        // make a database connection
        return new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function mysql_pdo($host, $dbname, $user, $password) {
    // global $pdo;
    try {
        $dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=UTF8";
        // $dsn = "mysql:unix_socket=/path/to/mysql.sock;dbname=$dbname;charset=UTF8";

        // make a database connection
        return new PDO($dsn, $user, $password);
    
    } catch (PDOException $e) {
        die($e->getMessage());
        // error_log('MySQL connection failed: ' . $e->getMessage());
        // die('Database connection failed.');
    }
}


// Initialize database connection
initializeDatabase();