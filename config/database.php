<?php
ob_start();
error_reporting(E_ERROR);
ini_set('display_errors', 0);

// Use environment variables (Railway provides these automatically)
// If they aren't found (like when running locally), it defaults to your local setup
$servername = getenv('MYSQLHOST') ?: 'hayabusa.proxy.rlwy.net';
$dbport     = getenv('MYSQLPORT') ?: '49211';
$dbusername = getenv('MYSQLUSER') ?: 'root';
$dbpassword = getenv('MYSQLPASSWORD') ?: 'gDiFnwvDjZiIGaUYaABhlBdHOGXpxyDr'; 
$dbname     = getenv('MYSQLDATABASE') ?: 'railway';

try {
    // Connect using variables
    $con = new PDO("mysql:host=$servername;port=$dbport;dbname=$dbname;charset=utf8mb4", $dbusername, $dbpassword);
    $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    // Only show this on your local machine if needed; in production, logs are better
    echo "Database connection failed. Please check your Railway environment variables.";
    error_log($e->getMessage());
    exit();
}

if(!function_exists('NoXSSPlz')){
    function NoXSSPlz($input){
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
}

if (!function_exists('errorhandler')) {
    function errorhandler()
    {
        $last_error = error_get_last();
        if ($last_error && $last_error['type'] == E_ERROR) {
            http_response_code(500);
            $error_message = date('Y-m-d H:i:s') . ' - Error: ' . $last_error['message'] . ' in ' . $last_error['file'] . ' on line ' . $last_error['line'] . PHP_EOL;
            error_log($error_message, 3, 'error.log');
        }
    }
}
register_shutdown_function('errorhandler');
?>